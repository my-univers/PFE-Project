<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackPremierSecours;
use App\Models\PackProduit;
use App\Models\PremiersSecours;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackController extends Controller
{
    public function showList(){
        $packs_list = Pack::paginate(10);
        return view("packs.list" ,['list' => $packs_list ] );
    }

    public function showForm(){
        $packs= Pack::all();
        $produits = Produit::all();
        return view('packs.add', ['list_packs' => $packs, 'produits' => $produits]);
    }


    public function addPack(Request $req){
        
        $pack = new Pack();
        $pack->nom = $req->nom;
        $pack->qte_en_stock = $req->qte_en_stock;
        $pack->prix = $req->prix;
        $pack->description = $req->description;
        
        // Traitement de l'image si elle est présente
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $pack->image_path = 'img/' . $imageName;
        }

        $pack->save();

        $produitId = $req->produit_id;

        PackProduit::create([
            'pack_id' => $pack->id,
            'produits_id' => $produitId
        ]);

        return redirect('/packs');

    }

    public function showUpdateForm($id){
        $p = Pack::find($id);
        return view("packs.update", ['pack' => $p]);
    }

    public function updatePack(Request $request, $id) {
        $c = Pack::find($id);

        $c->nom = $request->nom;
        $c->description = $request->description;
        $c->prix = $request->prix;
        $c->qte_en_stock = $request->qte_stock;

        // Traitement de la nouvelle image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);

            // Suppression de l'ancienne image si elle existe
            // if ($c->image_path) {
            //     unlink(public_path($c->image_path));
            // }

            $c->image_path = 'img/' . $imageName;
        }

        $c->save();

        return redirect('/packs');
    }

    public function deletePack($id) {
        $c = Pack::find($id);

        if ($c->image_path) {
            unlink(public_path($c->image_path));
        }

        $c->delete();
        return redirect('/packs');
    }

}
