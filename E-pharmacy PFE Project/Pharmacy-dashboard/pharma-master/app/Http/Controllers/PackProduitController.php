<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackProduit;
use App\Models\PremiersSecours;
use App\Models\Produit;
use Illuminate\Http\Request;

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
        // Récupérer les données du formulaire
        $packId = $request->input('pack_id');
        $produitIds = $request->input('produits_id');

        // Insérer les entrées dans la table packs_produits
        foreach ($produitIds as $produitId) {
            PackProduit::create([
                'pack_id' => $packId,
                'produits_id' => $produitId
            ]);
        }

        $pack = Pack::find($packId);

        $total = 0;
        foreach ($produitIds as $produitId) {
            $produit = Produit::find($produitId);
            $total += $produit->prix;
        }

        $reduction = $total * 0.05;
        $totalPack = $total - $reduction;
        $totalPack = number_format($totalPack, 2);

        $pack->prix = $totalPack;
        $pack->save();

        // Rediriger avec un message de succès
        return redirect('/packs_produits');
    }

    public function showDetails($id) {
        $pack= Pack::find($id);
        $produits = $pack->produits()->paginate(5, ['*'], 'produits');
        // get all products where qte_en_stock >= 1
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

        return redirect('/packs_produits');
    }

    public function addToPack($produit_id, $pack_id) {

        $pack = Pack::findOrFail($pack_id);
        $produit = Produit::findOrFail($produit_id);

        $pack->produits()->attach($produit);

            return redirect()->back();
        }


    public function removeProduct($pack_id, $produit_id) {

        $pack = Pack::find($pack_id);

        $pack->produits()->detach($produit_id);

        return redirect()->back();
    }


    public function deletePackProduit($id) {
        $packProduit = PackProduit::find($id);
        $packProduit->delete();

        if ($packProduit->pack->image_path != 'img/default-pack.jpg') {
            unlink(public_path($packProduit->pack->image_path));
        }

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
