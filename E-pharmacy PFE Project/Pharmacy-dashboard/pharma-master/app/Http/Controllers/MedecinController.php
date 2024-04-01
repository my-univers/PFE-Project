<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

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

        FacadesAlert::success('Médecin ajouté avec succés');

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

        FacadesAlert::success('Médecin mis à jour avec succés');

        return redirect('/medecins/list');
    }

    public function deleteMedecin($id) {
        $m = Medecin::find($id);
        $m->delete();

        FacadesAlert::success('Médecin supprimé avec succés');

        return redirect('/medecins/list');
    }

    public function searchMedecin(Request $request)
    {
        $search_input = $request->input('search_input');

        $query = Medecin::query();

        if ($search_input) {
            $query->where('nom', 'like', '%' . $search_input . '%')
                ->orWhere('email', 'like', '%' . $search_input . '%')
                ->orWhere('specialite', 'like', '%' . $search_input . '%')
                ->orWhere('ville', 'like', '%' . $search_input . '%');
        }

        // Exécuter la requête
        $medecins = $query->paginate(10);

        // Passer les résultats à la vue
        return view('medecins.list', ['medecins' => $medecins]);
    }

}
