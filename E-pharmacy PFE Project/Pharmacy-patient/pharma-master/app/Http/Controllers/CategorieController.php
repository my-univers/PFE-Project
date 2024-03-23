<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function showComplements(){
        $complements = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Compléments Alimentaires');
        })->get();

        return view('categories.complements' , ['complements' => $complements]);

    }

    public function showMedicaments(){
        $medicaments = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Médicaments');
        })->get();
        
        return view('categories.medicaments' , ['medicaments' => $medicaments]);

    }

    public function showPremiers(){
        $premiers = Produit::whereHas('categorie', function ($query) {
            $query->where('nom', 'Premiers Secours');
        })->get();
        
        return view('categories.premiers_secours' , ['premiers' => $premiers]);

    }
}
