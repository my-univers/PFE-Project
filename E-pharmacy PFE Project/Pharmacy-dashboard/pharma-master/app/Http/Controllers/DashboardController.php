<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Contact;
use App\Models\Medecin;
use App\Models\Produit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $clients = Client::all();
        $produits = Produit::all();
        $commandes = Commande::all();
        $commandes_paginate = Commande::paginate(10);

        $clients_count = Client::count();
        $commandes_count = Commande::count();
        $medecins_count = Medecin::count();
        $produits_count = Produit::count();
        $category_count = Categorie::count();

        $produits_epuises_count = Produit::whereIn('qte_en_stock', [0, 1])->count();
        $produits_epuises = Produit::where('qte_en_stock', 0)->get();
        $notifications = Contact::where('is_read', false)->count();

        return view('index', [
            'clients' => $clients,
            'produits' => $produits,
            'clients_count' => $clients_count,
            'commandes_count' => $commandes_count,
            'medecins_count' => $medecins_count,
            'produits_count' => $produits_count,
            'produits_epuises_count' => $produits_epuises_count,
            'category_count' => $category_count,
            'produits_epuises' => $produits_epuises,
            'commandes' => $commandes,
            'commandes_paginate' => $commandes_paginate,
            'notifications' => $notifications
        ]);
    }
}
