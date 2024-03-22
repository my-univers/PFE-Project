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
        ->get();

        return view('/packs_produits.list', ['list_packs' => $list_packs]);
    }
    

    public function showDetails($id) {
        $pack= Pack::find($id);
        $produits = $pack->produits()->get();
        
        $total = 0;
        foreach ($produits as $produit) {
            $total += $produit->prix;
        }
        $reduction = $total * 0.05;
        $totalPack = $total - $reduction;
        $totalPack = number_format($totalPack, 2);

        $pack->prix = $totalPack;
        $pack->save();
        return view('/packs_produits.details', ['pack' => $pack, 'produits' => $produits, 'totalPack' => $totalPack,'allProducts' => $allProducts ]);
    }


    public function showForm()
    {
        $packs = Pack::all();
        $list_premiers = PremiersSecours::all();
        return view("packs_produits.add", ['list_packs'=> $packs, 'list_premiers' => $list_premiers]);
    }

    public function showAddToPackForm() {
        $packs = Pack::all();
        $produits = Produit::all();
        return view('/packs_produits/addToPack', ['list_packs' => $packs, 'list_produits' => $produits]);
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
                return redirect('/packs_produits');
            }

        
}
