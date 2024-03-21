<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function showList(Request $request) {
        $commandes = Commande::paginate(10);
        return view('commandes.list', ['commandes' => $commandes]);
    }

    public function showDetails($id) {
        $commande = Commande::find($id);
        $client = $commande->client;
        $produits = $commande->produits()->withPivot('quantite')->get();

        // Calcul du total de la commande
        $totalCommande = 0;
        foreach ($produits as $produit) {
            $totalCommande += $produit->prix * $produit->pivot->quantite;
        }

        return view('commandes.details', ['commande' => $commande, 'client' => $client, 'produits' => $produits, 'totalCommande' => $totalCommande]);
    }

    public function validerCommande($id) {
        $commande = Commande::find($id);
        $commande->statut = "Validée";
        $commande->save();

        return redirect('/commandes');
    }

    public function addCommandeForm() {
        $clients = Client::paginate(5);
        $produits = Produit::all();

        return view('commandes.add', ['clients' => $clients, 'produits' => $produits]);
    }

    public function addCommande(Request $request)
    {
        // Récupérer l'ID du client sélectionné
        $client_id = $request->input('client_id');

        // Créer une nouvelle commande
        $commande = new Commande();
        $commande->client_id = $client_id;
        $commande->date_commande = now(); // Ou utilisez la date fournie par le formulaire
        $commande->total = 0; // Le total sera calculé plus tard
        $commande->statut = "En attente"; // Vous pouvez définir un statut par défaut
        $commande->save();

        // Récupérer les produits sélectionnés avec leurs quantités
        $produits = $request->input('produit_id');
        $quantites = $request->input('quantite');

        // Calculer le total de la commande et associer les produits à la commande
        $total_commande = 0;
        foreach ($produits as $produit_id) {
            $quantite = $quantites[$produit_id];
            $produit = Produit::find($produit_id);

            // Ajouter le prix du produit multiplié par la quantité à calculer
            $total_commande += $produit->prix * $quantite;

            // Ajouter le produit à la commande avec la quantité via la table pivot produits_commandes
            $commande->produits()->attach($produit_id, ['quantite' => $quantite]);
        }

        // Mettre à jour le total de la commande
        $commande->total = $total_commande;
        $commande->save();

        // Rediriger vers la page des commandes avec un message de succès
        return redirect('/commandes');
    }

    public function annulerCommande($id) {
        $commande = Commande::find($id);
        $commande->statut = "Annulée";
        $commande->save();

        return redirect('/commandes');
    }

}
