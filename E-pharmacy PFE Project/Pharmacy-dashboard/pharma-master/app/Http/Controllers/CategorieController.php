<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    public function showList(Request $request) {
        $categories = DB::table('categories')->paginate(10);

        return view('categories.list', ['categories' => $categories]);
    }

    public function addCategorieForm(Request $request) {
        return view('categories.add');
    }

    public function addCategorie(Request $request) {
        $c = new Categorie();
        $nom = $request->nom;
        $c->nom = $nom;

        $c->save();

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

        return redirect('/categories/list');
    }

    public function deleteCategorie($id) {
        $c = Categorie::find($id);
        $c->delete();

        return redirect('/categories/list');
    }
}
