<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Pack;
use App\Models\Produit;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function showMagasinProduits()
    {
        $products = Produit::paginate(9);
        $categories = Categorie::all();

        return view('magasin.produits', ['products' => $products, 'categories' => $categories]);
    }

    public function showMagasinPacks()
    {
        $packs = Pack::has('produits')->paginate(9);
        $categories = Categorie::all();

        return view('magasin.packs', ['packs' => $packs, 'categories' => $categories]);
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

        return view('magasin.produits', ['products' => $products, 'categories' => $categories]);
    }

    public function filterPacks(Request $request)
    {
        $query = Pack::query()->has('produits');

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
                    // Utilisez le prix total du pack
                    $query->leftJoin('packs_produits', 'packs.id', '=', 'packs_produits.pack_id')
                        ->join('produits', 'packs_produits.produits_id', '=', 'produits.id') // Jointure avec la table produits
                        ->selectRaw('packs.*, SUM(produits.prix) AS total_prix')
                        ->groupBy('packs.id')
                        ->orderBy('total_prix', 'asc');
                    break;
                case 'price_desc':
                    // Utilisez le prix total du pack
                    $query->leftJoin('packs_produits', 'packs.id', '=', 'packs_produits.pack_id')
                        ->join('produits', 'packs_produits.produits_id', '=', 'produits.id') // Jointure avec la table produits
                        ->selectRaw('packs.*, SUM(produits.prix) AS total_prix')
                        ->groupBy('packs.id')
                        ->orderBy('total_prix', 'desc');
                    break;
            }
        }

        $categories = Categorie::all();
        $packs = $query->paginate(9);

        return view('magasin.packs', ['packs' => $packs, 'categories' => $categories]);
    }

    public function showDetails($id){
        $categories = Categorie::all();
        $products = Produit::find($id);
        $orderValidated = session()->get('order_validated', false);

        return view('product-details', ['product' => $products, 'categories' => $categories, 'orderValidated' => $orderValidated]);
    }

    public function showPackDetails($id) {
        $categories = Categorie::all();
        $pack = Pack::find($id);

        return view('packs-details', ['categories' => $categories, 'pack' => $pack]);
    }

    public function searchProduct(Request $request)
    {
        // Récupérer le terme de recherche depuis la requête
        $searchTerm = $request->input('searchTerm');

        // Effectuer la recherche des produits en fonction du terme de recherche
        $products = Produit::where('nom', 'like', '%' . $searchTerm . '%')
                        ->orWhere('descr', 'like', '%' . $searchTerm . '%')
                        ->paginate(10);

        $categories = Categorie::all();

        return view('magasin.produits', compact('products', 'categories'));
    }

    public function searchPack(Request $request)
    {
        // Récupérer le terme de recherche depuis la requête
        $searchTerm = $request->input('searchTerm');

        // Effectuer la recherche des produits en fonction du terme de recherche
        $packs = Pack::has('produits')->where('nom', 'like', '%' . $searchTerm . '%')
                        ->orWhere('description', 'like', '%' . $searchTerm . '%')
                        ->paginate(10);

        $categories = Categorie::all();

        return view('magasin.packs', compact('packs', 'categories'));
    }

}
