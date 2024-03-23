<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function showComplements()
    {
        $complements = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Compléments Alimentaires');
        })->get();

        return view('categories.complements', ['complements' => $complements]);
    }

    public function showMedicaments()
    {
        $medicaments = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Médicaments');
        })->get();

        return view('categories.medicaments', ['medicaments' => $medicaments]);
    }

    public function showPremiers()
    {
        $premiers = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Premiers Secours');
        })->get();

        return view('categories.premiers_secours', ['premiers' => $premiers]);
    }

    public function filterComplements(Request $request)
    {
        $sortBy = $request->query('sort');

        $complements = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Compléments Alimentaires');
        });

        switch ($sortBy) {
            case 'relevance':
                break;
            case 'nom_asc':
                $complements->orderBy('nom', 'asc');
                break;
            case 'nom_desc':
                $complements->orderBy('nom', 'desc');
                break;
            case 'prix_asc':
                $complements->orderBy('prix', 'asc');
                break;
            case 'prix_desc':
                $complements->orderBy('prix', 'desc');
                break;
            default:

                break;
        }

        $complements = $complements->get();

        return view('/categories/complements', ['complements' => $complements]);
    }

    public function filterMedicaments(Request $request)
    {
        $sortBy = $request->query('sort');

        $medicaments = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Médicaments');
        });

        switch ($sortBy) {
            case 'relevance':
                break;
            case 'nom_asc':
                $medicaments->orderBy('nom', 'asc');
                break;
            case 'nom_desc':
                $medicaments->orderBy('nom', 'desc');
                break;
            case 'prix_asc':
                $medicaments->orderBy('prix', 'asc');
                break;
            case 'prix_desc':
                $medicaments->orderBy('prix', 'desc');
                break;
            default:

                break;
        }

        $medicaments = $medicaments->get();

        return view('/categories/medicaments', ['medicaments' => $medicaments]);
    }

    public function filterPremiers(Request $request)
    {
        $sortBy = $request->query('sort');

        $premiers = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Premiers Secours');
        });

        switch ($sortBy) {
            case 'relevance':
                break;
            case 'nom_asc':
                $premiers->orderBy('nom', 'asc');
                break;
            case 'nom_desc':
                $premiers->orderBy('nom', 'desc');
                break;
            case 'prix_asc':
                $premiers->orderBy('prix', 'asc');
                break;
            case 'prix_desc':
                $premiers->orderBy('prix', 'desc');
                break;
            default:

                break;
        }

        $premiers = $premiers->get();

        return view('/categories/premiers_secours', ['premiers' => $premiers]);
    }
}
