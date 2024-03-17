<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackPremierSecours;
use App\Models\PremiersSecours;
use Illuminate\Http\Request;

class PackPremiersSecoursController extends Controller
{

    public function showList(){
        $packsPremiersSecours = PackPremierSecours::with('pack')->get();
        return view('packs_premiers_secours.list', ['list_packs' => $packsPremiersSecours]);
    }

    public function showForm(){
        $pack = Pack::all();
        $premiers_secours = PremiersSecours::all();
        return view("packs_premiers_secours.add" ,['list_premiers' => $premiers_secours , 'list_packs' => $pack] );
    }

    public function addPackPremierSecours(Request $request)
    {
        $pack_id = $request->input('id_pack');
        $premiers_id = $request->input('premiers_secours');

            foreach ($premiers_id as $premiersSecoursId) {
                // Créer un nouvel enregistrement dans la table packs_premiers_secours
                $packPremiersSecours = new PackPremierSecours();
                $packPremiersSecours->pack_id = $pack_id;
                $packPremiersSecours->premier_secours_id = $premiersSecoursId;
                $packPremiersSecours->save();
            }
            return redirect("packs_premiers_secours");
    }
    
    
}
