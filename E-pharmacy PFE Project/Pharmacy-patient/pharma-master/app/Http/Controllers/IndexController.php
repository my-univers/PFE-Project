<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function popularProducts()
    {
        $recentProducts = Produit::orderBy('created_at', 'desc')->take(4)->get();
        $products = Produit::take(6)->get();
        $categories = Categorie::all();
        return view('index', ['products' => $products, 'recentProducts' => $recentProducts, 'categories' => $categories]);
    }

    public function showMagasin(){
        $products = Produit::paginate(9);
        $categories = Categorie::all();

        return view('shop', ['products' => $products, 'categories'=>$categories]);
    }









    
    // public function showComplements(){
    //     $complements = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Compléments Alimentaires');
    //     })->get();

    //     return view('complements' , ['complements' => $complements]);

    // }

    // public function showMedicaments(){
    //     $medicaments = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Médicaments');
    //     })->get();

    //     return view('complements' , ['medicaments' => $medicaments]);

    // }


}
