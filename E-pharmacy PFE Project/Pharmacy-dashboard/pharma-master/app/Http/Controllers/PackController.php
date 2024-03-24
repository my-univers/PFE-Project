<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\PackPremierSecours;
use App\Models\PackProduit;
use App\Models\PremiersSecours;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackController extends Controller
{
    public function showList()
    {
        // Récupérer la liste paginée des packs
        $packs_list = Pack::where('qte_en_stock', '>=', 1)->paginate(10);

        // Retourner la vue avec la liste des packs mise à jour
        return view("packs.list", ['list' => $packs_list]);
    }

    public function showForm()
    {
        $packs = Pack::all();
        $produits = Produit::all();
        return view('packs.add', ['list_packs' => $packs, 'produits' => $produits]);
    }

    public function addPack(Request $req)
    {

        $pack = new Pack();
        $pack->nom = $req->nom;
        $pack->qte_en_stock = $req->qte_en_stock;
        $pack->prix = 0;
        $pack->description = $req->description;


        // Traitement de l'image si elle est présente
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $pack->image_path = 'img/' . $imageName;

            // Copier l'image vers le répertoire img du projet de l'interface client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/img/' . $imageName);
            copy(public_path('img/' . $imageName), $clientImagePath);
        } else {
            // Si aucune image n'est téléchargée, attribuer l'image par défaut
            $pack->image_path = 'img/default-pack.jpg';
        }

        $pack->save();
        return redirect('/packs');
    }

    public function showUpdateForm($id)
    {
        $p = Pack::find($id);
        return view("packs.update", ['pack' => $p]);
    }

    public function updatePack(Request $request, $id)
    {
        $pack = Pack::findOrFail($id);

        $pack->nom = $request->nom;
        $pack->description = $request->description;
        $pack->prix = $request->prix;
        $pack->qte_en_stock = $request->qte_stock;

        // Traitement de la nouvelle image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Stocker la nouvelle image dans le répertoire du projet admin
            $adminImagePath = public_path('img/' . $imageName);
            $image->move(public_path('img'), $imageName);

            // Stocker la nouvelle image dans le répertoire du projet client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/img/' . $imageName);
            copy($adminImagePath, $clientImagePath);

            // Suppression de l'ancienne image si elle existe et n'est pas 'default-pack.jpg' chez le dashbord admin
            if ($pack->image_path && $pack->image_path !== 'img/default-pack.jpg') {
                unlink(public_path($pack->image_path));
            }

            // Suppression de l'ancienne image si elle existe et n'est pas 'default-pack.jpg' chez l'interface client
            if ($pack->image_path && $pack->image_path !== 'img/default-pack.jpg') {
                // Supprimer l'ancienne image du projet client
                $clientOldImagePath = base_path('../../Pharmacy-patient/pharma-master/public/' . $pack->image_path);
                if (file_exists($clientOldImagePath)) {
                    unlink($clientOldImagePath);
                }
            }

            $pack->image_path = 'img/' . $imageName;
        }

        $pack->save();

        return redirect('/packs');
    }

    public function deletePack($id) {
        $pack = Pack::findOrFail($id);

        // Supprimer l'image associée si elle n'est pas l'image par défaut
        if ($pack->image_path != 'img/default-pack.jpg') {
            // Supprimer l'image du projet admin
            $adminImagePath = public_path($pack->image_path);
            if (file_exists($adminImagePath)) {
                unlink($adminImagePath);
            }

            // Supprimer l'image du projet client
            $clientImagePath = base_path('../../Pharmacy-patient/pharma-master/public/' . $pack->image_path);
            if (file_exists($clientImagePath)) {
                unlink($clientImagePath);
            }
        }

        // Supprimer le pack
        $pack->delete();

        return redirect('/packs');
    }

    public function searchPack(Request $request)
    {
        $search_input = $request->input('search_input');

        $query = Pack::query()->withCount('produits');

        if ($search_input) {
            $query->where('nom', 'like', '%' . $search_input . '%')
                ->orWhere('qte_en_stock', 'like', '%' . $search_input . '%');
        }

        // Exécuter la requête
        $packs = $query->paginate(10);

        // Passer les résultats à la vue
        return view('packs.list', ['list' => $packs]);
    }

}
