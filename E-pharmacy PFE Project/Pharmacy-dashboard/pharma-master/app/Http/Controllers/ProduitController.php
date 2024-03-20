<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function showList(Request $request) {
        // Récupérer l'ID de la catégorie à filtrer depuis la requête
        $categorieId = $request->input('categorie');

        // Récupérer tous les produits ou filtrer par catégorie si une catégorie est spécifiée
        $query = Produit::query();
        if ($categorieId) {
            $query->where('categorie_id', $categorieId);
        }
        $produits = $query->get();

        // Récupérer toutes les catégories pour le menu déroulant de filtrage
        $categories = Categorie::all();

        return view('produits.list', ['produits' => $produits, 'categories' => $categories]);
    }

    public function addProduitForm() {
        $categories = Categorie::all();

        return view('produits.add', ['categories' => $categories]);
    }

    public function addProduit(Request $request) {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->descr = $request->descr;
        $produit->categorie_id = $request->categorie;
        $produit->prix = $request->prix;
        $produit->qte_en_stock = $request->qte_en_stock;
        $produit->ordonnance = $request->ordonnance;

        // Traitement de l'image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $produit->image_path = 'img/' . $imageName;
        }

        $produit->save();

        return redirect('/produits/list');
    }

    public function updateProduitForm($id) {
        $produit = Produit::find($id);
        $categories = Categorie::all();

        return view('produits.update', ['produit' => $produit, 'categories' => $categories]);
    }

    public function updateProduit(Request $request, $id) {
        $p = Produit::findOrFail($id);
        $p->nom = $request->nom;
        $p->descr = $request->descr;
        $p->prix = $request->prix;
        $p->qte_en_stock = $request->qte_en_stock;
        $p->ordonnance = $request->ordonnance;
        $p->categorie_id = $request->categorie;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);

            // Suppression de l'ancienne image si elle existe
            if ($p->image_path) {
                unlink(public_path($p->image_path));
            }

            $p->image_path = 'img/' . $imageName;
        }

        $p->save();

        return redirect('/produits/list');
    }

    public function deleteProduit($id) {

        $p = Produit::findOrFail($id);

        if ($p->image_path) {
            unlink(public_path($p->image_path));
        }

        $p->delete();

        return redirect('/produits/list');
    }

}
