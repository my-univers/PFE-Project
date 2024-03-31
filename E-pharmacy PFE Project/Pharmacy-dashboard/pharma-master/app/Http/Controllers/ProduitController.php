<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    public function showList(Request $request)
    {
        // Récupérer l'ID de la catégorie à filtrer depuis la requête
        $categorieId = $request->input('categorie');

        // Récupérer tous les produits ou filtrer par catégorie si une catégorie est spécifiée
        $query = Produit::query();
        if ($categorieId) {
            $query->where('categorie_id', $categorieId);
        }
        $produits = $query->paginate(10);

        // Récupérer toutes les catégories pour le menu déroulant de filtrage
        $categories = Categorie::all();

        return view('produits.list', ['produits' => $produits, 'categories' => $categories, 'categorieId' => $categorieId]);
    }

    public function addProduitForm()
    {
        $categories = Categorie::all();

        return view('produits.add', ['categories' => $categories]);
    }

    public function addProduit(Request $request)
    {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->descr = $request->descr;
        $produit->categorie_id = $request->categorie;
        $produit->prix = $request->prix;
        $produit->qte_en_stock = $request->qte_en_stock;
        $produit->ordonnance = $request->ordonnance;
        $produit->ingredients = $request->ingredients;
        $produit->poids = $request->poids;

        // Traitement de l'image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);

            // Copier l'image vers le répertoire img du projet de l'interface client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/img/' . $imageName);
            copy(public_path('img/' . $imageName), $clientImagePath);

            $produit->image_path = 'img/' . $imageName;
        } else {
            // Si aucune image n'est téléchargée, attribuer l'image par défaut
            $produit->image_path = 'img/default-image.jpg';
        }

        $produit->save();

        return redirect('/produits/list');
    }

    public function updateProduitForm($id)
    {
        $produit = Produit::find($id);
        $categories = Categorie::all();

        return view('produits.update', ['produit' => $produit, 'categories' => $categories]);
    }

    public function updateProduit(Request $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->nom = $request->nom;
        $produit->descr = $request->descr;
        $produit->categorie_id = $request->categorie;
        $produit->prix = $request->prix;
        $produit->qte_en_stock = $request->qte_en_stock;
        $produit->ordonnance = $request->ordonnance;

        // Traitement de la nouvelle image si elle est présente
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si ce n'est pas l'image par défaut
            if ($produit->image_path != 'img/default-image.jpg') {
                // Supprimer l'image du projet admin
                $adminImagePath = public_path($produit->image_path);
                if (file_exists($adminImagePath)) {
                    unlink($adminImagePath);
                }

                // Supprimer l'image du projet client
                $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/' . $produit->image_path);
                if (file_exists($clientImagePath)) {
                    unlink($clientImagePath);
                }
            }

            // Stocker la nouvelle image dans les répertoires des deux projets
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Stocker la nouvelle image dans le projet admin
            $adminImagePath = public_path('img/' . $imageName);
            $image->move(public_path('img'), $imageName);

            // Stocker la nouvelle image dans le projet client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/img/' . $imageName);
            copy($adminImagePath, $clientImagePath);

            $produit->image_path = 'img/' . $imageName;
        }

        $produit->save();

        return redirect('/produits/list');
    }

    public function deleteProduit($id)
    {
        $produit = Produit::findOrFail($id);

        // Supprimer l'image associée si elle n'est pas l'image par défaut
        if ($produit->image_path != 'img/default-image.jpg') {
            // Supprimer l'image du projet admin
            $adminImagePath = public_path($produit->image_path);
            if (file_exists($adminImagePath)) {
                unlink($adminImagePath);
            }

            // Supprimer l'image du projet client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/' . $produit->image_path);
            if (file_exists($clientImagePath)) {
                unlink($clientImagePath);
            }
        }

        // Supprimer le produit
        $produit->delete();

        return redirect('/produits/list');
    }


    public function SoldProducts()
    {
        $produits_epuises = Produit::where('qte_en_stock', 0)->paginate(10);
        return view('produits.produits_epuises', ['produits_epuises' => $produits_epuises]);
    }
}
