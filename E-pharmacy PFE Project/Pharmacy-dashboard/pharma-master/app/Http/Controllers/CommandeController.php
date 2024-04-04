<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Pack;
use App\Models\Produit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class CommandeController extends Controller
{
    public function showList(Request $request)
    {
        $commandes = Commande::latest()->paginate(10);
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

        FacadesAlert::success('La commande a été validée avec succés');

        return back();
    }

    public function addCommandeForm()
    {
        // Récupérer les clients paginés avec un nom de page distinct
        $clients = Client::paginate(5, ['*'], 'clients_page');

        // Récupérer les produits avec une quantité en stock supérieure ou égale à 1 et une page de pagination distincte
        $produits = Produit::latest()->where('qte_en_stock', '>=', 1)->paginate(5, ['*'], 'produits_page');

        // Récupérer les packs de produits
        $packs = Pack::latest()->paginate(5, ['*'], 'packs_page');

        // Retourner la vue avec les clients et les produits
        return view('commandes.add', ['clients' => $clients, 'produits' => $produits, 'packs' => $packs]);
    }

    public function addCommande(Request $request)
    {
        // Vérifier si aucun client n'a été sélectionné
        if (!$request->has('client_id')) {
            FacadesAlert::warning("Veuillez sélectionner le client \n\n concerné !")->flash();
            return back()->withInput();
        }

        // Vérifier si aucun produit ni aucun pack n'est sélectionné
        if (!$request->has('produits_id') && !$request->has('packs_id')) {
            FacadesAlert::warning("Veuillez sélectionner au moins \n\n un produit ou un pack !")->flash();
            return back()->withInput();
        }

        // Récupérer l'ID du client sélectionné
        $client_id = $request->input('client_id');

        // Créer une nouvelle commande
        $commande = new Commande();
        $commande->client_id = $client_id;
        $commande->date_commande = now(); // Ou utilisez la date fournie par le formulaire
        $commande->total = 0; // Le total sera calculé plus tard
        $commande->statut = "En attente"; // Vous pouvez définir un statut par défaut

        // Récupérer les produits sélectionnés avec leurs quantités
        $produits = $request->input('produits_id');
        $quantites = $request->input('quantite');

        // Calculer le total de la commande et associer les produits à la commande
        $total_commande = 0;
        if ($produits) {
            foreach ($produits as $produit_id) {
                $quantite = $quantites[$produit_id];
                $produit = Produit::find($produit_id);

                // Vérifier si la quantité en stock est suffisante
                if ($produit->qte_en_stock >= $quantite) {
                    // Ajouter le prix du produit multiplié par la quantité à calculer
                    $total_commande += $produit->prix * $quantite;

                    // Décrémenter la quantité en stock du produit
                    $produit->qte_en_stock -= $quantite;
                    $produit->save();

                    // Ajouter le produit à la commande avec la quantité via la table pivot produits_commandes
                    $commande->produits()->attach($produit_id, ['quantite' => $quantite]);
                } else {
                    // Si la quantité en stock n'est pas suffisante, afficher un message d'erreur
                    FacadesAlert::error("La quantité de " . $produit->nom . "\n\n est insuffisante !");
                    return back()->withInput();
                }
            }
        }

        // Récupérer les packs sélectionnés avec leurs quantités
        $packs = $request->input('packs_id');
        $quantites_packs = $request->input('quantite');

        if ($packs) {
            // Associer les packs à la commande
            foreach ($packs as $pack_id) {
                $quantite_pack = $quantites_packs[$pack_id];
                $pack = Pack::find($pack_id);

                // Vérifier si la quantité en stock est suffisante
                if ($pack->qte_en_stock >= $quantite_pack) {
                    // Ajouter le prix du pack multiplié par la quantité à calculer
                    $total_commande += $pack->prix * $quantite_pack;

                    // Décrémenter la quantité en stock du pack
                    $pack->qte_en_stock -= $quantite_pack;
                    $pack->save();

                    // Ajouter le pack à la commande avec la quantité via la table pivot packs_commandes
                    $commande->packs()->attach($pack_id, ['quantite' => $quantite_pack]);
                } else {
                    // Si la quantité en stock n'est pas suffisante, afficher un message d'erreur
                    FacadesAlert::error("La quantité de " . $pack->nom . "\n\n est insuffisante !");
                    return back()->withInput();
                }
            }
        }

        // Mettre à jour le total de la commande
        $commande->total = $total_commande;
        $commande->save();

        FacadesAlert::success("Commande ajoutée avec \n\n succès");

        return redirect('/commandes')->with('success', 'Commande ajoutée avec succès');
    }
    public function annulerCommande($id)
    {
        $commande = Commande::find($id);
        $commande->statut = "Annulée";
        $commande->save();

        FacadesAlert::success('La commande a été annulée');

        return back();
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
