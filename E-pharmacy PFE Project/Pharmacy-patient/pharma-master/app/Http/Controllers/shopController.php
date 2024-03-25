<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function showMagasin(){
        $products = Produit::paginate(9);
        $categories = Categorie::all();

        return view('shop', ['products' => $products, 'categories'=>$categories]);
    }

    public function filterProducts(Request $request)
    {
        $query = Produit::query();

        if ($request->has('sort')) {

            switch ($request->sort) {
                case 'relevance':
                    break;
                case 'name_asc':
                    $query->orderBy('nom', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('nom', 'desc');
                    break;
                case 'price_asc':
                    $query->orderBy('prix', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('prix', 'desc');
                    break;
            }
        }

        $categories = Categorie::all();
        $products = $query->paginate(9);

        return view('shop', ['products' => $products, 'categories' => $categories]);
    }

    public function showDetails($id){
        $categories = Categorie::all();
        $products = Produit::find($id);

        return view('/product-details', ['product' => $products, 'categories' => $categories]);
    }

}
