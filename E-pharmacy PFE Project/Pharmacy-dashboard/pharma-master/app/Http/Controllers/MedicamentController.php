<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MedicamentController extends Controller
{
    public function showMedicsList(Request $request) {
        $medicaments = Medicament::all();

        return view('medicaments.list', ['medicaments' => $medicaments]);
    }

    public function addMedicForm() {
        return view('medicaments.add');
    }

    public function addMedicament(Request $request) {
        $medic = new Medicament();
        $medic->nom = $request->nom;
        $medic->descr = $request->descr;
        $medic->prix = $request->prix;
        $medic->qte_en_stock = $request->qte_en_stock;
        $medic->ordonnance = $request->ordonnance;

        // Traitement de l'image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $medic->image_path = 'img/' . $imageName;
        }

        $medic->save();

        return redirect('/medicaments/list');
    }

    public function updateMedicForm($id) {
        $medic = Medicament::find($id);

        // Extraction du nom de l'image à partir du chemin de l'image
        $imageName = pathinfo($medic->image_path, PATHINFO_BASENAME);

        return view('medicaments.update', ['medic' => $medic, 'imageName' => $imageName]);
    }

    public function updateMedicament(Request $request, $id) {
        $medic = Medicament::findOrFail($id);
        $medic->nom = $request->nom;
        $medic->descr = $request->descr;
        $medic->prix = $request->prix;
        $medic->qte_en_stock = $request->qte_en_stock;
        $medic->ordonnance = $request->ordonnance;

        // Traitement de la nouvelle image si elle est présente
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);

            // Suppression de l'ancienne image si elle existe
            if ($medic->image_path) {
                unlink(public_path($medic->image_path));
            }

            $medic->image_path = 'img/' . $imageName;
        }

        $medic->save();

        return redirect('/medicaments/list');
    }

    public function deleteMedicament($id) {
        $medic = Medicament::findOrFail($id);

        // Suppression de l'image associée si elle existe
        if ($medic->image_path) {
            unlink(public_path($medic->image_path));
        }

        $medic->delete();

        return redirect('/medicaments/list');
    }

}
