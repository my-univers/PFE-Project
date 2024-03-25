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

    public function aboutPage(){
        $categories = Categorie::all();
        return view('about', ['categories' => $categories]);
    }

    public function contactPage(){
        $categories = Categorie::all();
        return view('contact', ['categories' => $categories]);
    }
}
