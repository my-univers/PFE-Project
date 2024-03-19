<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function showList(Request $request) {
        $commandes = Commande::all();
        return view('commandes.list', ['commandes' => $commandes]);
    }
}
