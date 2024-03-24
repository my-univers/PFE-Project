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

    public function filterProducts(Request $request, $id)
    {
        $sort = $request->input('sort');

        $categorie = Categorie::find($id);

        $query = $categorie->produits();

        switch ($sort) {
            case 'relevance':
                $query->orderBy('relevance_column');
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
            default:
                $query->orderBy('relevance_column');
        }

        $produits = $query->paginate(9);
        $categories = Categorie::all();

        return view('categories.products', ['categorie' => $categorie, 'categories' => $categories, 'produits' => $produits]);
    }

    

}






