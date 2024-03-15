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


    public function addPremier(Request $request) {
        $premier = new PremiersSecours();
        $premier->nom = $request->nom;
        $premier->description = $request->description;
        $premier->marque = $request->marque;
        $premier->prix = $request->prix;
        $premier->qte_en_stock = $request->qte_en_stock;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $premier->image_path = 'img/' . $imageName;
        }

        $premier->save();

        return redirect('/premiers_secours/list');
    }

    
    public function updatePremier(Request $request, $id) {
        $p = PremiersSecours::find($id);

        $p->nom = $request->nom;
        $p->description = $request->description;
        $p->marque = $request->marque;
        $p->prix = $request->prix;
        $p->qte_en_stock = $request->qte_stock;
        $p->image_path = $request->image;

        $p->save();

        return redirect('/premiers_secours');
    }


    public function showUpdateForm($id){
        $c = PremiersSecours::find($id);
        return view("premiers_secours.update", ['premier' => $c]);
    }

    public function deletePremier($id) {
        $c = PremiersSecours::find($id);
        $c->delete();
        return redirect('/premiers_secours');
    }


}
