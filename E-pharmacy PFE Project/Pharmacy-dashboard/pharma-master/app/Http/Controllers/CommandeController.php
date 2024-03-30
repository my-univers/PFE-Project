<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Pack;
use App\Models\Produit;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function showList(Request $request)
    {
        $commandes = Commande::paginate(10);
        return view('commandes.list', ['commandes' => $commandes]);
    }

    public function showDetails($id)
    {
        $commande = Commande::find($id);
        $client = $commande->client;
        $produits = $commande->produits()->withPivot('quantite')->paginate(5);
        $packs = $commande->packs()->withPivot('quantite')->paginate(5);

        return view(
            'commandes.details',
            [
                'commande' => $commande,
                'client' => $client,
                'produits' => $produits,
                'packs' => $packs
            ]
        );
    }

    public function validerCommande($id)
    {
        $commande = Commande::find($id);
        $commande->statut = "Validée";
        $commande->save();

        return redirect('/commandes');
    }

    public function addCommandeForm()
    {
        // Récupérer les clients paginés avec un nom de page distinct
        $clients = Client::paginate(5, ['*'], 'clients_page');

        // Récupérer les produits avec une quantité en stock supérieure ou égale à 1 et une page de pagination distincte
        $produits = Produit::where('qte_en_stock', '>=', 1)->paginate(5, ['*'], 'produits_page');

        // Récupérer les packs de produits
        $packs = Pack::paginate(5, ['*'], 'packs_page');

        // Retourner la vue avec les clients et les produits
        return view('commandes.add', ['clients' => $clients, 'produits' => $produits, 'packs' => $packs]);
    }

    // public function addCommande(Request $request)
    // {
    //     // Récupérer l'ID du client sélectionné
    //     $client_id = $request->input('client_id');

    //     // Créer une nouvelle commande
    //     $commande = new Commande();
    //     $commande->client_id = $client_id;
    //     $commande->date_commande = now(); // Ou utilisez la date fournie par le formulaire
    //     $commande->total = 0; // Le total sera calculé plus tard
    //     $commande->statut = "En attente"; // Vous pouvez définir un statut par défaut
    //     $commande->save();

    //     // Récupérer les produits sélectionnés avec leurs quantités
    //     $selected_items = $request->input('selected_items');
    //     $total_commande = 0;

    //     if ($selected_items) {
    //         foreach ($selected_items as $item_id) {
    //             // Vérifier si l'élément est un produit ou un pack
    //             $element = Produit::find($item_id);
    //             if (!$element) {
    //                 $element = Pack::find($item_id);
    //             }

    //             if ($element) {
    //                 $quantite = $request->input('quantite')[$item_id];
    //                 $prix_total = $element->prix * $quantite;
    //                 $total_commande += $prix_total;

    //                 // Mettre à jour le stock de l'élément
    //                 if ($element->qte_en_stock >= 0) {
    //                     $element->qte_en_stock -= $quantite;
    //                     $element->save();
    //                 }

    //                 // Ajouter l'élément à la commande avec la quantité via la table pivot
    //                 if ($element instanceof Produit) {
    //                     $commande->produits()->attach($item_id, ['quantite' => $quantite]);
    //                 } elseif ($element instanceof Pack) {
    //                     $commande->packs()->attach($item_id, ['quantite' => $quantite]);
    //                 }
    //             }
    //         }
    //     }

    //     // Mettre à jour le total de la commande
    //     $commande->total = $total_commande;
    //     $commande->save();

    //     return redirect('/commandes')->with('success', 'Commande ajoutée avec succès');
    // }

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

        // Récupérer les produits et packs sélectionnés avec leurs quantités
        $selected_items = $request->input('selected_items');
        $total_commande = 0;

        if ($selected_items) {
            foreach ($selected_items as $item_id) {
                // Récupérer la quantité spécifiée pour cet élément
                $quantite_key = 'quantite_' . $item_id;
                $quantite = $request->input($quantite_key);

                // Vérifier si l'élément est un produit ou un pack
                $element = Produit::find($item_id);
                if (!$element) {
                    $element = Pack::find($item_id);
                }

                if ($element && $quantite) {
                    $prix_total = $element->prix * $quantite;
                    $total_commande += $prix_total;

                    // Mettre à jour le stock de l'élément
                    if ($element->qte_en_stock >= 0) {
                        $element->qte_en_stock -= $quantite;
                        $element->save();
                    }

                    // Ajouter l'élément à la commande avec la quantité via la table pivot
                    if ($element instanceof Produit) {
                        $commande->produits()->attach($item_id, ['quantite' => $quantite]);
                    } elseif ($element instanceof Pack) {
                        $commande->packs()->attach($item_id, ['quantite' => $quantite]);
                    }
                }
            }
        }

        // Mettre à jour le total de la commande
        $commande->total = $total_commande;
        $commande->save();

        return redirect('/commandes')->with('success', 'Commande ajoutée avec succès');
    }

    public function annulerCommande($id)
    {
        $commande = Commande::find($id);
        $commande->statut = "Annulée";
        $commande->save();

        return redirect('/commandes');
    }

    public function filterCommandes(Request $request)
    {
        $query = Commande::query();

        // Filtrage par date de commande
        if ($request->has('date_commande')) {
            $dateOrder = $request->date_commande;
            if ($dateOrder == 'asc') {
                $query->orderBy('date_commande', 'asc');
            } elseif ($dateOrder == 'desc') {
                $query->orderBy('date_commande', 'desc');
            }
        }

        // Filtrage par statut
        if ($request->has('statut')) {
            $statut = $request->statut;
            $query->where('statut', $statut);
        }

        // Exécuter la requête
        $commandes = $query->paginate(10);

        // Passer les résultats à la vue
        return view('commandes.list', ['commandes' => $commandes]);
    }
}
