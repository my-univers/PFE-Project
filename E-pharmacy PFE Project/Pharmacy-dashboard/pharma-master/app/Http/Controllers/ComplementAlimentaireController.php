<?php

namespace App\Http\Controllers;

use App\Models\ComplementAlimentaire;
use App\Models\ComplementAlimentaires;
use App\Models\ComplementsAlimentaires;
use Illuminate\Http\Request;

class ComplementAlimentaireController extends Controller
{
    public function showComplementsList(){
        $complements_list = ComplementsAlimentaires::all();
        return view("Complements_Alimentaires.list_complements" ,['list' => $complements_list ] );
    }


    public function showForm(){
        return view("Complements_Alimentaires.ajout_complements");
    }


    public function addComplement(Request $req){

        // $req->validate([
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',    
        // ]);


        // if ($req->hasFile('image')) {
        // $image = $req->file('image');
        // $imageName = time() . '.' . $image->extension();
        // $image->move(public_path('images'), $imageName);
        // }


        $complement = new ComplementsAlimentaires;

        $nom_field= $req->complementNom;
        $descr_field = $req->complementDescription;
        $prix_field = $req->complementPrice;
        $qte_stock_field = $req->qte_stock;
        $image_field = $req->image;


        $complement->nom = $nom_field;
        $complement->descr = $descr_field;
        $complement->prix = $prix_field;
        $complement->qte_en_stock = $qte_stock_field;
        $complement->image_path = $image_field;

        $complement->save();

        return redirect("/complements");

    }

    public function showUpdateForm($id){
        $c = ComplementsAlimentaires::find($id);
        return view("Complements_Alimentaires.update_complements", ['complement' => $c]);
    }

    public function updateComplement(Request $request, $id) {
        $c = ComplementsAlimentaires::find($id);

        $c->nom = $request->complementNom;
        $c->descr = $request->complementDescription;
        $c->prix = $request->complementPrice;
        $c->qte_stock = $request->qte_stock;
        $c->image = $request->image;

        $c->save();

        return redirect('/complements');
    }

    public function deleteComplement($id) {
        $c = ComplementsAlimentaires::find($id);
        $c->delete();

        return redirect('/complements');
    }
    

}
