<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocteurController extends Controller
{
    public function showMedsList()
    {
        $medecins = DB::table('medecins')->paginate(10);
        return view('docteurs', ['medecins' => $medecins]);
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
        return view('docteurs', ['medecins' => $medecins]);
    }

}
