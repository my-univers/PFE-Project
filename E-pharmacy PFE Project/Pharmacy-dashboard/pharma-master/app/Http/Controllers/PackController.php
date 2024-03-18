<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackPremierSecours;
use App\Models\PremiersSecours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackController extends Controller
{
    public function showList(){
        $packs_list = Pack::all();
        return view("packs.list" ,['list' => $packs_list ] );
    }

    public function showForm(){
        $packs= Pack::all();
        $premiers_secours = PremiersSecours::all();
        return view('packs.add', ['list' => $premiers_secours, 'list_packs' => $packs]);
    }


    public function addPack(Request $req){
        $pack = new Pack();
        $pack->nom = $req->nom;
        $pack->qte_en_stock = $req->qte_en_stock;
        $pack->prix = $req->prix;
        $pack->description = $req->description;
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $pack->image_path = 'img/' . $imageName;
        }
        $pack->save(); 
        $premiersSecoursIds = $req->input('premiers_secours');
        foreach ($premiersSecoursIds as $premiersSecoursId) {
            $premiersSecoursPack = new PackPremierSecours();
            $premiersSecoursPack->pack_id = $pack->id;
            $premiersSecoursPack->premiers_secours_id = $premiersSecoursId;
            $premiersSecoursPack->save();
        }
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
        $c->image_path = $request->image;

        $c->save();

        return redirect('/packs');
    }

    public function deletePack($id) {
        $c = Pack::find($id);
        $c->delete();
        return redirect('/packs');
    }
    
}
