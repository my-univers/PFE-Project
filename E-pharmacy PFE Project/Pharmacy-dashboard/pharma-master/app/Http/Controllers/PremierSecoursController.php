<?php

namespace App\Http\Controllers;

use App\Models\PremierSecours;
use App\Models\PremiersSecours;
use Illuminate\Http\Request;

class PremierSecoursController extends Controller
{
    
    public function showList(){
        $premiers = PremiersSecours::all();
        return view("premiers_secours.list" ,['list' => $premiers ] );
    }


    public function showForm(){
        return view("premiers_secours.ajout");
    }


    public function updatePremier(Request $request, $id) {
        $p = PremiersSecours::find($id);

        $p->nom = $request->nom;
        $p->description = $request->description;
        $p->marque = $request->marque;
        $p->prix = $request->prix;
        $p->qte__en_stock = $request->qte_en_stock;
        $p->image_path = $request->image;

        $p->save();

        return redirect('/premiers_secours/list');
    }


    public function showUpdateForm($id){
        $c = PremiersSecours::find($id);
        return view("premiers_secours.update", ['premier' => $c]);
    }

    public function updateComplement(Request $request, $id) {
        $c = PremiersSecours::find($id);

        $c->nom = $request->nom;
        $c->descr = $request->description;
        $c->prix = $request->prix;
        $c->qte_en_stock = $request->qte_stock;
        $c->image_path = $request->image;

        $c->save();

        return redirect('/premiers_secours');
    }


    public function deletePremier($id) {
        $c = PremiersSecours::find($id);
        $c->delete();
        return redirect('/premiers_secours');
    }


}
