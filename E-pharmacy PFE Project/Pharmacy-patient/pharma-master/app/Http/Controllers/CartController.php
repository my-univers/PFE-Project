<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Produit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Alert;
use App\Models\Client;
use App\Models\Commande;
use App\Models\PackCommande;
use App\Models\ProduitCommande;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $type = $request->input('type');
        $itemId = $request->input('item_id');
        $quantity = $request->input('quantity');

        // Initialiser le panier
        $cart = session()->get('cart', []);

        // Vérifier si l'article existe déjà dans le panier
        $existingItemKey = $this->findCartItemKey($cart, $type, $itemId);

        if ($existingItemKey !== false) {
            // L'article existe déjà dans le panier, donc augmenter la quantité
            $cart[$existingItemKey]['quantity'] += $quantity;
        } else {
            // L'article n'existe pas dans le panier, donc l'ajouter
            if ($type === 'product') {
                // Récupérer les détails du produit depuis la BD
                $product = Produit::find($itemId);
                if ($product) {
                    // Ajouter le produit au panier
                    $cart[] = [
                        'type' => 'product',
                        'item' => $product,
                        'quantity' => $quantity,
                    ];
                }
            } elseif ($type === 'pack') {
                // Récupérer les détails du pack depuis la BD
                $pack = Pack::find($itemId);
                if ($pack) {
                    // Ajouter le pack au panier
                    $cart[] = [
                        'type' => 'pack',
                        'item' => $pack,
                        'quantity' => $quantity,
                    ];
                }
            }
        }

        // Mettre à jour le panier dans la session
        session()->put('cart', $cart);

        FacadesAlert::success('Article ajouté au panier avec succés');

        return back();
    }

    public function showCart()
    {
        // Récupérer les éléments du panier depuis la session
        $cart = session()->get('cart', []);

        // Initialiser le total
        $total = 0;

        // Calculer le total des articles dans le panier
        foreach ($cart as $cartItem) {
            // Vérifier le type de l'article
            if ($cartItem['type'] === 'product') {
                // Si c'est un produit, multiplier le prix par la quantité
                $total += $cartItem['item']->prix * $cartItem['quantity'];
            } elseif ($cartItem['type'] === 'pack') {
                // Si c'est un pack, multiplier le prix par la quantité
                $total += $cartItem['item']->prix * $cartItem['quantity'];
            }
        }

        return view('cart', compact('cart', 'total'));
    }

    public function removeItem($type, $itemId)
    {
        // Récupérer le panier depuis la session
        $cart = session()->get('cart', []);

        // Identifier la clé correspondant à l'article dans le panier
        $key = $this->findCartItemKey($cart, $type, $itemId);

        // Vérifier si l'article existe dans le panier
        if ($key !== false) {
            // Supprimer l'article du panier
            unset($cart[$key]);

            // Mettre à jour le panier dans la session
            session()->put('cart', $cart);

            FacadesAlert::success('L\'article a été supprimé du panier.');

            return back()->with('success', 'L\'article a été supprimé du panier.');
        }

        FacadesAlert::error('L\'article n\'existe pas dans le panier.');

        return redirect()->back()->with('error', 'L\'article n\'existe pas dans le panier.');
    }

    // Méthode pour trouver la clé de l'article dans le panier
    private function findCartItemKey($cart, $type, $itemId)
    {
        foreach ($cart as $key => $item) {
            if ($item['type'] === $type && $item['item']->id == $itemId) {
                return $key;
            }
        }

        return false;
    }

    public function getItems(Request $request)
    {
        // Récupérer les éléments du panier depuis la session
        $cart = session()->get('cart', []);

        // Initialiser le total
        $total = 0;

        // Calculer le total des articles dans le panier
        foreach ($cart as $cartItem) {
            // Vérifier le type de l'article
            if ($cartItem['type'] === 'product') {
                // Si c'est un produit, multiplier le prix par la quantité
                $total += $cartItem['item']->prix * $cartItem['quantity'];
            } elseif ($cartItem['type'] === 'pack') {
                // Si c'est un pack, multiplier le prix par la quantité
                $total += $cartItem['item']->prix * $cartItem['quantity'];
            }
        }

        return view('checkout', compact('cart', 'total'));
    }

    public function passerCommande(Request $request)
    {
        // Récupérer les éléments du panier depuis la session
        $cart = session()->get('cart', []);

        // Vérifier s'il y a des éléments dans le panier
        if (empty($cart)) {
            FacadesAlert::error('Votre panier est vide. Ajoutez des articles avant de passer une commande.');
            return back();
        }

        // Calculer le total de la commande
        $totalCommande = 0;

        foreach ($cart as $item) {
            if ($item['type'] === 'product') {
                $totalCommande += $item['item']->prix * $item['quantity'];
            } elseif ($item['type'] === 'pack') {
                $totalCommande += $item['item']->prix * $item['quantity'];
            }
        }

        // Récupérer les informations du client depuis le formulaire
        $nom = $request->input('nom');
        $adresse = $request->input('c_address');
        $email = $request->input('c_email_address');
        $telephone = $request->input('c_phone');

        // Vérifier si le client existe déjà
        $client = Client::where('email', $email)->first();

        // Si le client n'existe pas, créer un nouveau client
        if (!$client) {
            $client = new Client();
            $client->nom = $nom;
            $client->adresse = $adresse;
            $client->email = $email;
            $client->telephone = $telephone;
            $client->save();
        }

        // Créer la nouvelle commande
        $commande = new Commande();
        $commande->client_id = $client->id;
        $commande->date_commande = now();
        $commande->statut = "En attente";
        $commande->total = $totalCommande;
        $commande->save();

        // Ajouter les articles de la commande dans les tables de liaison appropriées
        foreach ($cart as $item) {
            if ($item['type'] === 'product') {
                $produitCommande = new ProduitCommande();
                $produitCommande->commande_id = $commande->id;
                $produitCommande->produit_id = $item['item']->id;
                $produitCommande->quantite = $item['quantity'];
                $produitCommande->save();
            } elseif ($item['type'] === 'pack') {
                $packCommande = new PackCommande();
                $packCommande->commande_id = $commande->id;
                $packCommande->pack_id = $item['item']->id;
                $packCommande->quantite = $item['quantity'];
                $packCommande->save();
            }
        }

        // Vider le panier (la session)
        session()->forget('cart');

        FacadesAlert::success('Votre commande a été passée avec succès.');
        return redirect()->route('thankyou');
    }

}
