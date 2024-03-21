<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedecinController extends Controller
{
    public function showMedsList() {
        $medecins = DB::table('medecins')->paginate(10);
        return view('medecins.list', ['medecins' => $medecins]);
    }

    public function addMedForm() {
        return view('medecins.add');
    }

    public function addMedecin(Request $request) {
        $med = new Medecin();

        $nom = $request->nom;
        $email = $request->email;
        $telephone = $request->telephone;
        $ville = $request->ville;
        $specialite = $request->specialite;

        $med->nom = $nom;
        $med->email = $email;
        $med->telephone = $telephone;
        $med->ville = $ville;
        $med->specialite = $specialite;

        $med->save();
        return redirect('/medecins/list');
    }

    public function updateMedForm($id) {
        $m = Medecin::find($id);

        return view('medecins.update', ['m' => $m]);
    }

    public function updateMedecin(Request $request, $id) {
        $m = Medecin::find($id);

        $m->nom = $request->nom;
        $m->email = $request->email;
        $m->telephone = $request->telephone;
        $m->ville = $request->ville;
        $m->specialite = $request->specialite;

        $m->save();
        return redirect('/medecins/list');
    }

    public function deleteMedecin($id) {
        $m = Medecin::find($id);
        $m->delete();

        return redirect('/medecins/list');
    }
}
