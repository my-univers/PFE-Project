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


    public function addComplement(Request $request)
    {
        $complement = new ComplementsAlimentaires;

        $complement->nom = $request->complementNom;
        $complement->descr = $request->complementDescription;
        $complement->prix = $request->complementPrice;
        $complement->qte_en_stock = $request->qte_stock;
    
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
