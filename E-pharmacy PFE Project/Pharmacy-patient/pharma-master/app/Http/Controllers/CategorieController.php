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

    public function searchCategorie(Request $request, $id)
    {
        // Récupérer le terme de recherche depuis la requête
        $searchTerm = $request->input('searchTerm');

        // Effectuer la recherche des produits en fonction du terme de recherche
        $produits = Produit::where('nom', 'like', '%' . $searchTerm . '%')
                        ->orWhere('descr', 'like', '%' . $searchTerm . '%')
                        ->where('categorie_id', '=', $id)
                        ->paginate(10);

        $categorie = Categorie::find($id);
        $categories = Categorie::all();

        return view('categories.products', compact('produits', 'categories', 'categorie'));
    }
}






