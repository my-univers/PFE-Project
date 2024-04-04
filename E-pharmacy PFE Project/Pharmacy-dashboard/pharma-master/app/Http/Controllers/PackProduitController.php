<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackProduit;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class PackProduitController extends Controller
{
    public function showList()
    {
        $list_packs = PackProduit::with('produits')
        ->select('pack_id')
        ->groupBy('pack_id')
        ->paginate(10);

        return view('/packs_produits.list', ['list_packs' => $list_packs]);
    }

    public function addPackProduits(Request $request)
    {
        // Vérifier si aucun produit ni aucun pack n'est sélectionné
        if (!$request->has('produits_id')) {
            FacadesAlert::warning('Veuillez sélectionner au moins \n\n un produit !')->flash();
            return back()->withInput();
        } elseif (!$request->has('pack_id')) {
            FacadesAlert::warning("Veuillez sélectionner le pack \n\n à remplir !")->flash();
            return back()->withInput();
        }

        $packId = $request->input('pack_id');
        $produitIds = $request->input('produits_id');
        $quantites = $request->input('quantite');

        foreach ($produitIds as $produitId) {
            $quantite = $quantites[$produitId];

            $produit = Produit::find($produitId);

            // Vérifier si la quantité en stock est suffisante
            if ($produit->qte_en_stock >= $quantite) {
                // Diminuer la quantité en stock
                $nouvelleQuantite = $produit->qte_en_stock - $quantite;
                $produit->qte_en_stock = $nouvelleQuantite;
                $produit->save();

                // Ajouter le produit au pack
                PackProduit::create([
                    'pack_id' => $packId,
                    'produits_id' => $produitId,
                    'qte_produit' => $quantite
                ]);
            } else {
                // Si la quantité en stock n'est pas suffisante, afficher un message d'erreur
                FacadesAlert::error("La quantité de " . $produit->nom . " \n\n est insuffisante !");
                return back()->withInput();
            }
        }

        // Calculer le prix total du pack et appliquer une réduction
        $total = 0;
        foreach ($produitIds as $produitId) {
            $quantite = $quantites[$produitId];
            $produit = Produit::find($produitId);
            $total += $produit->prix * $quantite;
        }
        $reduction = $total * 0.05;
        $totalPack = $total - $reduction;
        $totalPack = number_format($totalPack, 2);

        // Mettre à jour le prix du pack
        $pack = Pack::find($packId);
        $pack->prix = $totalPack;
        $pack->save();

        // Afficher un message de succès
        FacadesAlert::success("Pack de produits ajouté \n\n avec succès");

        // Rediriger avec un message de succès
        return redirect('/packs_produits');
    }

    public function showDetails($id)
    {
        $pack = Pack::find($id);
        $produits = $pack->produits()->paginate(7, ['*'], 'produits');

        // Get all products where qte_en_stock >= 1
        $allProducts = Produit::where('qte_en_stock', '>=', 1)->latest()->paginate(7, ['*'], 'allProducts_page');

        $total = 0;
        foreach ($produits as $produit) {
            $total += $produit->prix;
        }
        $reduction = $total * 0.05;
        $totalPack = $total - $reduction;
        $totalPack = number_format($totalPack, 2);

        return view('/packs_produits.details', ['pack' => $pack, 'produits' => $produits, 'allProducts' => $allProducts, 'totalPack' => $totalPack]);
    }


    public function showForm()
    {
        // Sélectionner les packs qui n'ont pas de produits associés
        $packs = Pack::whereNotIn('id', function ($query) {
            $query->select('pack_id')->from('packs_produits');
        })->paginate(7, ['*'], 'packs_page');
        $produits = Produit::where('qte_en_stock', '>=', '1')->paginate(7, ['*'], 'produits_page');
        return view("packs_produits.add", ['packs' => $packs, 'produits' => $produits]);
    }


    public function updateForm($id)
    {
        $p = Pack::find($id);
        return view("packs_produits.update", ['pack' => $p]);
    }

    public function updatePackProduit(Request $request, $id)
    {
        $c = Pack::find($id);

        $c->nom = $request->nom;
        $c->description = $request->description;
        $c->prix = $request->prix;
        $c->qte_en_stock = $request->qte_en_stock;

        // Traitement de la nouvelle image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Stocker la nouvelle image dans le répertoire du projet admin
            $adminImagePath = public_path('img/' . $imageName);
            $image->move(public_path('img'), $imageName);

            // Stocker la nouvelle image dans le répertoire du projet client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/img/' . $imageName);
            copy($adminImagePath, $clientImagePath);

            // Suppression de l'ancienne image si elle existe et n'est pas 'default-pack.jpg' chez le dashbord admin
            if ($c->image_path && $c->image_path !== 'img/default-pack.jpg') {
                unlink(public_path($c->image_path));
            }

            // Suppression de l'ancienne image si elle existe et n'est pas 'default-pack.jpg' chez l'interface client
            if ($c->image_path && $c->image_path !== 'img/default-pack.jpg') {
                // Supprimer l'ancienne image du projet client
                $clientOldImagePath = base_path('../../Pharmacy-patient/pharma-master/public/' . $c->image_path);
                if (file_exists($clientOldImagePath)) {
                    unlink($clientOldImagePath);
                }
            }

            $c->image_path = 'img/' . $imageName;
        }

        $c->save();

        FacadesAlert::success('Pack mis à jour avec succés');

        return redirect('/packs_produits');
    }

    public function addToPack($pack_id, Request $request)
    {
        // Récupérer les données du formulaire
        $produit_id = $request->input('produit_id');
        $quantite = $request->input('quantite');

        // Récupérer le pack
        $pack = Pack::findOrFail($pack_id);

        // Récupérer le produit
        $produit = Produit::findOrFail($produit_id);

        // Vérifier si la quantité en stock est suffisante
        if ($produit->qte_en_stock >= $quantite) {
            // Vérifier si le produit existe déjà dans le pack
            $existingProduct = $pack->produits()->where('produits_id', $produit_id)->first();

            if ($existingProduct) {
                // Mettre à jour la quantité du produit existant
                $existingProduct->pivot->update(['qte_produit' => $existingProduct->pivot->qte_produit + $quantite]);

                // Diminuer la quantité du produit dans le stock
                $stock = $produit->qte_en_stock - $quantite;
                $produit->update(['qte_en_stock' => $stock]);

                FacadesAlert::success('Produit ajouté au pack');
            } else {
                // Attacher le produit avec la quantité au pack
                $pack->produits()->attach($produit, ['qte_produit' => $quantite]);

                // Diminuer la quantité du produit dans le stock
                $produit->qte_en_stock -= $quantite;
                $produit->save();

                FacadesAlert::success('Produit ajouté au pack');
            }
        } else {
            // Si la quantité en stock n'est pas suffisante, afficher un message d'erreur
            FacadesAlert::error("La quantité de " . $produit->nom . " \n\n est insuffisante !");
        }

        return back()->with('success', 'Produit ajouté avec succès au pack.');
    }

    public function minusProduct($pack_id, $produit_id)
    {
        // Recherche du pack et du produit
        $pack = Pack::findOrFail($pack_id);
        $produit = Produit::findOrFail($produit_id);

        // Vérifier si le produit existe dans le pack
        $existingProduct = $pack->produits()->where('produits.id', $produit_id)->first();

        if ($existingProduct) {
            // Récupérer la quantité actuelle du produit dans le pack
            $currentQuantity = $existingProduct->pivot->qte_produit;

            // Vérifier si la quantité est supérieure à 1 avant de la diminuer
            if ($currentQuantity > 1) {
                // Diminuer la quantité du produit dans le pack
                $existingProduct->pivot->update(['qte_produit' => $currentQuantity - 1]);

                // Augmenter la quantité du produit dans le stock
                $produit->qte_en_stock += 1;
                $produit->save();
            }
        }

        return back();
    }

    public function addOneToPack($pack_id, $produit_id)
    {
        $pack = Pack::findOrFail($pack_id);
        $produit = Produit::findOrFail($produit_id);

        // Vérifier si le produit existe déjà dans le pack
        $existingProduct = $pack->produits()->where('produits_id', $produit_id)->first();

        // Mettre à jour la quantité du produit existant en ajoutant un
        $existingProduct->pivot->update(['qte_produit' => $existingProduct->pivot->qte_produit + 1]);

        // Diminuer la quantité du produit dans le stock
        $produit->qte_en_stock -= 1;
        $produit->save();

        return back();
    }

    public function removeProduct($pack_id, $produit_id)
    {

        $pack = Pack::find($pack_id);

        $pack->produits()->detach($produit_id);

        return back();
    }


    public function deletePackProduit($id)
    {
        $pack = Pack::find($id);
        $pack->delete();

        // Supprimer l'image associée si elle n'est pas l'image par défaut
        if ($pack->image_path != 'img/default-pack.jpg') {
            // Supprimer l'image du projet admin
            $adminImagePath = public_path($pack->image_path);
            if (file_exists($adminImagePath)) {
                unlink($adminImagePath);
            }

            // Supprimer l'image du projet client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/' . $pack->image_path);
            if (file_exists($clientImagePath)) {
                unlink($clientImagePath);
            }
        }

        FacadesAlert::success('Pack supprimé avec succés');

        return redirect('/packs_produits');
    }

    public function searchPackProduit(Request $request)
    {
        $search_input = $request->input('search_input');

        $query = PackProduit::with(['packs'])
            ->selectRaw('pack_id, count(produits_id) as nombre_produits')
            ->groupBy('pack_id');

        if ($search_input) {
            $query->whereHas('packs', function ($query) use ($search_input) {
                $query->where('nom', 'like', '%' . $search_input . '%')
                    ->orWhere('qte_en_stock', 'like', '%' . $search_input . '%')
                    ->orWhere('prix', 'like', '%' . $search_input . '%');
            });
        }

        $list_packs = $query->paginate(10);

        return view('packs_produits.list', ['list_packs' => $list_packs]);
    }
}
