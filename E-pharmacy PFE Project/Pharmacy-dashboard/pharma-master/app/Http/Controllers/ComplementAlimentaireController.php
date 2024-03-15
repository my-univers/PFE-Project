<?php

namespace App\Http\Controllers;

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


        $complement = new ComplementsAlimentaires;

        $nom_field= $req->complementNom;
        $descr_field = $req->complementDescription;
        $prix_field = $req->complementPrice;
        $qte_stock_field = $req->qte_stock;


        $complement->nom = $nom_field;
        $complement->descr = $descr_field;
        $complement->prix = $prix_field;
        $complement->qte_en_stock = $qte_stock_field;

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $complement->image_path = 'img/' . $imageName;
        }

        $complement->save();

        return redirect("/complements");

    }

    public function showUpdateForm($id){
        $c = ComplementsAlimentaires::find($id);
        return view("Complements_Alimentaires.update_complements", ['complement' => $c]);
    }

    public function updateComplement(Request $request, $id) {
        $c = ComplementsAlimentaires::find($id);

        $c->nom = $request->nom;
        $c->descr = $request->description;
        $c->prix = $request->prix;
        $c->qte_en_stock = $request->qte_stock;
        $c->image_path = $request->image;

        $c->save();

        return redirect('/complements');
    }


    public function deleteComplement($id) {
        $c = ComplementsAlimentaires::find($id);
        $c->delete();
        return redirect('/complements');
    }
    
}
