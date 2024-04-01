<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackProduit;
use App\Models\PremiersSecours;
use App\Models\Produit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class PackProduitController extends Controller
{
    public function showList()
    {
        $list_packs = PackProduit::with(['packs', 'produits'])
        ->select('pack_id')
        ->groupBy('pack_id')
        ->paginate(10);

        return view('/packs_produits.list', ['list_packs' => $list_packs]);
    }

    public function addPackProduits(Request $request) {
        $packId = $request->input('pack_id');
        $produitIds = $request->input('produits_id');
        $quantites = $request->input('quantite');

        foreach ($produitIds as $produitId) {
            $quantite = $quantites[$produitId];

            $pack_produits = PackProduit::create([
                'pack_id' => $packId,
                'produits_id' => $produitId,
                'qte_produit' => $quantite
            ]);
        }

        $pack = Pack::find($packId);
        $total = 0;

        foreach ($produitIds as $key => $produitId) {
            $quantite = $quantites[$key];

            $produit = Produit::find($produitId);
            $total += $produit->prix * $quantite;
        }

        $reduction = $total * 0.05;
        $totalPack = $total - $reduction;
        $totalPack = number_format($totalPack, 2);

        $pack->prix = $totalPack;
        $pack->save();

<<<<<<< HEAD
        return view('/packs_produits/details', ['totalPack' => $totalPack]);
=======
        FacadesAlert::success('Pack de produits ajouté avec succés');

        // Rediriger avec un message de succès
        return redirect('/packs_produits');
>>>>>>> 1e041a26ac1b64bc928dc5490c97855527f87a2a
    }

    public function showDetails($id) {
        $pack= Pack::find($id);
        $produits = $pack->produits()->paginate(5, ['*'], 'produits');

        // Get all products where qte_en_stock >= 1
        $allProducts = Produit::where('qte_en_stock','>=',1)->paginate(5, ['*'], 'allProducts_page');

        $total = 0;
        foreach ($produits as $produit) {
            $total += $produit->prix;
        }
        $reduction = $total * 0.05;
        $totalPack = $total - $reduction;
        $totalPack = number_format($totalPack, 2);

        return view('/packs_produits.details', ['pack' => $pack, 'produits' => $produits, 'allProducts' => $allProducts, 'total' => $totalPack]);
    }


    public function showForm()
    {
        // Sélectionner les packs qui n'ont pas de produits associés
        $packs = Pack::whereNotIn('id', function ($query) {
            $query->select('pack_id')->from('packs_produits');
        })->paginate(5, ['*'], 'packs_page');
        $produits = Produit::paginate(5, ['*'], 'produits_page');
        return view("packs_produits.add", ['packs'=> $packs, 'produits' => $produits]);
    }


    public function updateForm($id){
        $p = Pack::find($id);
        return view("packs_produits.update", ['pack' => $p]);
    }

    public function updatePackProduit(Request $request, $id) {
        $c = Pack::find($id);

        $c->nom = $request->nom;
        $c->description = $request->description;
        $c->prix = $request->prix;
        $c->qte_en_stock = $request->qte_en_stock;

        // Traitement de la nouvelle image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);

            // //  Suppression de l'ancienne image si elle existe
            // if ($c->image_path) {
            //     unlink(public_path($c->image_path));
            // }

            $c->image_path = 'img/' . $imageName;
        }

        $c->save();

        FacadesAlert::success('Pack mis à jour avec succés');

        return redirect('/packs_produits');
    }

    public function addToPack($pack_id, Request $request) {
        $pack = Pack::findOrFail($pack_id);
        $produit_id = $request->input('produit_id'); // Lire l'ID du produit depuis le formulaire
        $quantite = $request->input('quantite');

        // Récupérer le produit en fonction de son ID
        $produit = Produit::findOrFail($produit_id);

        // Vérifier si le produit existe déjà dans le pack
        $existingProduct = $pack->produits()->where('produits_id', $produit_id)->first();

        if ($existingProduct) {
            // Mettre à jour la quantité du produit existant
            $existingProduct->pivot->update(['qte_produit' => $existingProduct->pivot->qte_produit + $quantite]);
        } else {
            // Attacher le produit avec la quantité au pack
            $pack->produits()->attach($produit, ['qte_produit' => $quantite]);
        }

        return back();
    }

    public function minusProduct($pack_id, $produit_id) {
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
            }
        }

        return back();
    }

    public function addOneToPack($pack_id, $produit_id) {
        $pack = Pack::findOrFail($pack_id);
        $produit = Produit::findOrFail($produit_id);

        // Vérifier si le produit existe déjà dans le pack
        $existingProduct = $pack->produits()->where('produits_id', $produit_id)->first();

        // Mettre à jour la quantité du produit existant en ajoutant un
        $existingProduct->pivot->update(['qte_produit' => $existingProduct->pivot->qte_produit + 1]);


        return back();
    }

    public function removeProduct($pack_id, $produit_id) {

        $pack = Pack::find($pack_id);

        $pack->produits()->detach($produit_id);

        return back();
    }


    public function deletePackProduit($id) {
        $pack = Pack::find($id);
        $pack->delete();

        if ($pack->image_path != 'img/default-pack.jpg') {
            unlink(public_path($pack->image_path));
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

        // Exécuter la requête
        $list_packs = $query->paginate(10);

        // Passer les résultats à la vue
        return view('packs_produits.list', ['list_packs' => $list_packs]);
    }

}
