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

    // AYA : FIX REDIRECTION !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!1
    public function filterProducts(Request $request, $id)
    {
        $categorie = Categorie::find($id);
        $query = $categorie->produits();

        // Vérifier les options de filtrage
        if ($request->has('sort')) {
            $sort = $request->input('sort');
            switch ($sort) {
                case 'relevance':
                    // Tri par pertinence (option par défaut)
                    // Vous pouvez ajouter votre logique de tri ici
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
                    // Tri par pertinence par défaut
                    break;
            }
        }

        // Paginer les résultats
        $produits = $query->paginate(9);

        // Retourner la vue avec les produits filtrés
        return view('categories.products', ['produits' => $produits, 'categorie' => $categorie]);
    }













    // public function showComplements(){
    //     $complements = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Compléments Alimentaires');
    //     })->paginate(9);

    //     return view('categories.complements' , ['complements' => $complements]);

    // }
    //     return view('categories.complements', ['complements' => $complements]);
    // }

    // public function showMedicaments(){
    //     $medicaments = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Médicaments');
    //     })->get();

    //     return view('categories.medicaments' , ['medicaments' => $medicaments]);

    // }

    // public function showPremiers()
    // {
    //     $premiers = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Premiers Secours');
    //     })->get();

    //     return view('categories.premiers_secours', ['premiers' => $premiers]);
    // }

    // public function filterComplements(Request $request)
    // {
    //     $sortBy = $request->query('sort');

    //     $complements = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Compléments Alimentaires');
    //     });

    //     switch ($sortBy) {
    //         case 'relevance':
    //             break;
    //         case 'nom_asc':
    //             $complements->orderBy('nom', 'asc');
    //             break;
    //         case 'nom_desc':
    //             $complements->orderBy('nom', 'desc');
    //             break;
    //         case 'prix_asc':
    //             $complements->orderBy('prix', 'asc');
    //             break;
    //         case 'prix_desc':
    //             $complements->orderBy('prix', 'desc');
    //             break;
    //         default:

    //             break;
    //     }

    //     $complements = $complements->get();

    //     return view('/categories/complements', ['complements' => $complements]);
    // }

    // public function filterMedicaments(Request $request)
    // {
    //     $sortBy = $request->query('sort');

    //     $medicaments = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Médicaments');
    //     });

    //     switch ($sortBy) {
    //         case 'relevance':
    //             break;
    //         case 'nom_asc':
    //             $medicaments->orderBy('nom', 'asc');
    //             break;
    //         case 'nom_desc':
    //             $medicaments->orderBy('nom', 'desc');
    //             break;
    //         case 'prix_asc':
    //             $medicaments->orderBy('prix', 'asc');
    //             break;
    //         case 'prix_desc':
    //             $medicaments->orderBy('prix', 'desc');
    //             break;
    //         default:

    //             break;
    //     }

    //     $medicaments = $medicaments->get();

    //     return view('/categories/medicaments', ['medicaments' => $medicaments]);
    // }

    // public function filterPremiers(Request $request)
    // {
    //     $sortBy = $request->query('sort');

    //     $premiers = Produit::whereHas('categorie', function ($query) {
    //         $query->where('nom', 'Premiers Secours');
    //     });

    //     switch ($sortBy) {
    //         case 'relevance':
    //             break;
    //         case 'nom_asc':
    //             $premiers->orderBy('nom', 'asc');
    //             break;
    //         case 'nom_desc':
    //             $premiers->orderBy('nom', 'desc');
    //             break;
    //         case 'prix_asc':
    //             $premiers->orderBy('prix', 'asc');
    //             break;
    //         case 'prix_desc':
    //             $premiers->orderBy('prix', 'desc');
    //             break;
    //         default:

    //             break;
    //     }

    //     $premiers = $premiers->get();

    //     return view('/categories/premiers_secours', ['premiers' => $premiers]);
    // }
}
