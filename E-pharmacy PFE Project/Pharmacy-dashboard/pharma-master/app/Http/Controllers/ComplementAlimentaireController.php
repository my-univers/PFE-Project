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


    public function addComplement(Request $request){

        $complement = new ComplementsAlimentaires;

        $nom_field= $request->complementNom;
        $descr_field = $request->complementDescription;
        $prix_field = $request->complementPrice;
        $qte_stock_field = $request->qte_stock;

        $complement->nom = $nom_field;
        $complement->descr = $descr_field;
        $complement->prix = $prix_field;
        $complement->qte_en_stock = $qte_stock_field;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
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

        // Traitement de la nouvelle image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);

            // Suppression de l'ancienne image si elle existe
            if ($c->image_path) {
                unlink(public_path($c->image_path));
            }

            $c->image_path = 'img/' . $imageName;
        }

        $c->save();

        return redirect('/complements');
    }


    public function deleteComplement($id) {
        $c = ComplementsAlimentaires::find($id);
        unlink(public_path($c->image_path));
        $c->delete();
        return redirect('/complements');
    }

}
