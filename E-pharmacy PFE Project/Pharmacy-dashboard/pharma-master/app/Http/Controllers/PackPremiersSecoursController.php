<?php

namespace App\Http\Controllers;
use App\Models\Pack;
use App\Models\PackPremierSecours;
use App\Models\PremiersSecours;
use Exception;
use Illuminate\Http\Request;

class PackPremiersSecoursController extends Controller
{

    public function showList()
    {
        $packsPremiersSecours = PackPremierSecours::with(['pack', 'premiersSecours'])
        ->select('pack_id') 
        ->groupBy('pack_id')
        ->get();

        return view('/packs_premiers_secours.list', ['list_packs' => $packsPremiersSecours]);
    }


    public function showForm()
    {
        $packs = Pack::all();
        $list_premiers = PremiersSecours::all();
        return view("packs_premiers_secours.add", ['list_packs'=> $packs, 'list_premiers' => $list_premiers]);
    }

    public function updateForm()
    {
        $packs_premiers_secours = PackPremierSecours::first();
        return view('packs_premiers_secours.update', ['pack' => $packs_premiers_secours]);
    }


    

    public function addPackPremierSecours(Request $req)
{
    $packPremiersSecours = new PackPremierSecours();

    $packPremiersSecours->nom = $req->nom;
    $packPremiersSecours->description = $req->description;
    $packPremiersSecours->prix = $req->prix;
    $packPremiersSecours->qte_en_stock = $req->qte_en_stock;
    $premiers_id = $req->input('premiers_secours');

    $packPremiersSecours->save();

    foreach ($premiers_id as $premiersSecoursId) {
        $packPremiersSecours->premiersSecours()->attach($premiersSecoursId);
    }

    return redirect("packs_premiers_secours");
}

    public function showAddToPackForm($id)
    {

        $pack = PackPremierSecours::findOrFail($id);
        $premiers_secours = PremiersSecours::all();

        return view("packs_premiers_secours.addToPack", ['pack' => $pack, 'list_premiers' => $premiers_secours]);
    }

   public function addToPack(Request $request, $id)
{
    $pack_id = $request->input('pack_id');
    $premiersSecoursIds = $request->input('premiers_secours');

    try {
        $pack = Pack::findOrFail($pack_id);

        foreach ($premiersSecoursIds as $produitPremiersSecoursId) {
            $premiersSecoursIds = PremiersSecours::findOrFail($produitPremiersSecoursId);
            $pack->premiersSecours()->attach($produitPremiersSecoursId);
            
        }
        return redirect("packs_premiers_secours");
    }catch(Exception $e){
        return redirect("packs_premiers_secours");
}



    
    // if ($premiersSecoursIds) {
    //     foreach ($premiersSecoursIds as $premiersSecoursId) {
    //         if (!$pack_id->premiersSecours()->where('id', $premiersSecoursId)->exists()) {
    //             $pack_id->premiersSecours()->associate($premiersSecoursId);
    //         }
    //     }    
    //     return redirect("packs_premiers_secours");
    // } else {
    //     return redirect()->back()->with('error', 'Aucun produit premier secours sélectionné.');
    // }
}


    public function updatePack(Request $req, $id)
    {
        $p = PackPremierSecours::find($id);

        $p->nom = $req->nom;
        $p->description = $req->description;
        $p->prix = $req->prix;
        $p->qte_en_stock = $req->qte_en_stock;

        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);

            if ($p->image_path) {
                unlink(public_path($p->image_path));
            }

            $p->image_path = 'img/' . $imageName;
        }


        $p->save();

        return redirect('/packs_premiers_secours');
    }


    public function deletePack($id)
    {
        $p = PackPremierSecours::find($id);

        $p->delete();

        return redirect('/packs_premiers_secours');
    }
}
