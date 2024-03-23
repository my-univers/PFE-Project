<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class shopController extends Controller
{
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

        $products = $query->paginate(9); 

        return view('shop', compact('products'));
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