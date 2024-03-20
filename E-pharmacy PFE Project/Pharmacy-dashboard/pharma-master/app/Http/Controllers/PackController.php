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
        $packs_list = Pack::paginate(10);
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
        $pack->composition = $req->composition;

        // Traitement de l'image si elle est présente
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
        $c->composition = $request->composition;

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
