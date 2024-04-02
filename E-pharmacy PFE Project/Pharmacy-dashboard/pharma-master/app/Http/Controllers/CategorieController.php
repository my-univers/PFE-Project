<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class CategorieController extends Controller
{
    public function showList() {
        $categories = Categorie::latest()->paginate(10);

        return view('categories.list', ['categories' => $categories]);
    }

    public function addCategorieForm() {
        return view('categories.add');
    }

    public function addCategorie(Request $request) {
        $c = new Categorie();
        $nom = $request->nom;
        $c->nom = $nom;

        $c->save();

        FacadesAlert::success('Catégorie ajoutée avec succés');

        return redirect('/categories/list');
    }

    public function updateCategorieForm($id) {
        $c = Categorie::find($id);

        return view('categories.update', ['c' => $c]);
    }

    public function updateCategorie(Request $request, $id) {
        $c = Categorie::find($id);
        $c->nom = $request->nom;
        $c->save();

        FacadesAlert::success('Catégorie mise à jour avec succés');

        return redirect('/categories/list');
    }

    public function deleteCategorie($id) {
        $c = Categorie::find($id);
        $c->delete();

        FacadesAlert::success('Catégorie supprimée avec succés');

        return redirect('/categories/list');
    }

    public function searchCategorie(Request $request)
    {
        $search_input = $request->input('search_input');

        $query = Categorie::query();

        if ($search_input) {
            $query->where('nom', 'like', '%' . $search_input . '%');
        }

        // Exécuter la requête
        $categories = $query->paginate(10);

        // Passer les résultats à la vue
        return view('categories.list', ['categories' => $categories]);
    }

}
