<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function popularProducts()
    {
        $recentProducts = Produit::orderBy('created_at', 'desc')->take(4)->get();
        $products = Produit::take(6)->get();
        return view('index', ['products' => $products, 'recentProducts' => $recentProducts]);
    }

    public function showMagasin(){
        $products = Produit::paginate(9);
        return view('shop', ['products' => $products]);
    }
}
