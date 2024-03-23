<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function showProducts($id)
    {
        $categorie = Categorie::find($id);
        $produits = $categorie->produits()->paginate(9);
        $categories = Categorie::all();

        return view('categories.products', ['produits' => $produits, 'categories' => $categories, 'categorie' => $categorie]);
    }






    // public function showComplements(){
    //     $complements = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Compléments Alimentaires');
    //     })->paginate(9);

    //     return view('categories.complements' , ['complements' => $complements]);

    // }

    // public function showMedicaments(){
    //     $medicaments = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Médicaments');
    //     })->paginate(9);

    //     return view('categories.medicaments' , ['medicaments' => $medicaments]);

    // }

    // public function showPremiers(){
    //     $premiers = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Premiers Secours');
    //     })->paginate(9);

    //     return view('categories.premiers_secours' , ['premiers' => $premiers]);

    // }
}
