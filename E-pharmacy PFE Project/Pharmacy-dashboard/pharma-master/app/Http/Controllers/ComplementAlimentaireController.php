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
        $compelement = new ComplementsAlimentaires;

        $nom_field= $req->nom;
        $descr_field = $req->descr;
        $prix_field = $req->prix;
        $qte_stock_field = $req->qte_en_stock;
        $image_field = $req->image_path;

        $compelement->nom = $nom_field;
        $compelement->descr = $descr_field;
        $compelement->prix = $prix_field;
        $compelement->qte_en_stock = $qte_stock_field;
        $compelement->image_path = $image_field;

        $compelement->save();

        return redirect("/complements");

    }


}
