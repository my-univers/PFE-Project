<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackPremierSecours;
use App\Models\PremiersSecours;
use Illuminate\Http\Request;

class PackPremiersSecoursController extends Controller
{

    public function showList(){
        $packsPremiersSecours = PackPremierSecours::all();
        return view('packs_premiers_secours.list', ['list_packs' => $packsPremiersSecours]);
    }

    public function updateForm(){
        $packs_premiers_secours = PackPremierSecours::first();
        return view('packs_premiers_secours.update', ['pack' => $packs_premiers_secours]);
    }
    

    public function showForm(){
        $premiers_secours = PremiersSecours::all();
        return view("packs_premiers_secours.add" ,['list_premiers' => $premiers_secours] );
    }

    public function addPackPremierSecours(Request $req)
    {
        $packPremiersSecours = new PackPremierSecours();

            $packPremiersSecours->nom = $req->nom;
            $packPremiersSecours->description = $req->description;
            $packPremiersSecours->prix = $req->prix;
            $packPremiersSecours->qte_en_stock = $req->qte_en_stock;
            
            $packPremiersSecours->save();

            $premiers_id = $req->input('premiers_secours');

            foreach ($premiers_id as $premiersSecoursId) {
                $packPremiersSecours->premiersSecours()->attach($premiersSecoursId);
            }

            return redirect("packs_premiers_secours");
    }
    
 
    public function showAddToPackForm($id){

    $pack = PackPremierSecours::findOrFail($id);
    $premiers_secours = PremiersSecours::all();

    return view("packs_premiers_secours.addToPack" , ['pack' => $pack, 'list_premiers' => $premiers_secours] );

    }

    public function addToPack(Request $request, $id)
{
    $packPremiersSecours = PackPremierSecours::findOrFail($id);

    $premiersSecoursIds = $request->input('premiers_secours');

    if ($premiersSecoursIds) {
        foreach ($premiersSecoursIds as $premiersSecoursId) {
            if (!$packPremiersSecours->premiersSecours->contains($premiersSecoursId)) {
                $packPremiersSecours->premiersSecours()->associate($premiersSecoursId)->save();
            }
        }
        return redirect("packs_premiers_secours");
    } else {
        return redirect()->back()->with('error', 'Aucun produit premier secours sélectionné.');
    }
    }
    
    public function updatePack(Request $req, $id) {
        $p = PackPremierSecours::find($id);

        $p->nom = $req->nom;
        $p->description = $req->description;
        $p->prix = $req->prix;
        $p->qte_en_stock = $req->qte_en_stock;

        $p->save();

        return redirect('/packs_premiers_secours');
    }

    public function deletePack($id){
        $p = PackPremierSecours::find($id);
        
        $p->delete();

        return redirect('/packs_premiers_secours');
    }
    
}
