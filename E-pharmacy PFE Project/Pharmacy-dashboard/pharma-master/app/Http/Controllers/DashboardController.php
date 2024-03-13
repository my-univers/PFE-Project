<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $clients = Client::all();

        $clients_count = Client::count();
        $commandes_count = Commande::count();

        return view('index',
            ['clients' => $clients,
            'clients_count' => $clients_count,
            'commandes_count' => $commandes_count
        ]);
    }
}
