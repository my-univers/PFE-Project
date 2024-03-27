<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Smalot\PdfParser\Parser;
use Spatie\PdfToText\Pdf;

class ProduitController extends Controller
{
    public function uploadOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|file|mimes:pdf,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Obtenez le nom du produit sélectionné
        $product = Produit::find($request->product_id);
        $selectedProductName = $product->nom;

        // Lecture du fichier PDF
        $pdfParser = new Parser();
        $pdf = $pdfParser->parseFile($request->file('image')->path());

        // Récupération du texte ligne par ligne
        $text = '';
        foreach ($pdf->getPages() as $page) {
            $text .= $page->getText();
        }

        // Recherche du nom du produit dans le texte du PDF
        if (strpos($text, $selectedProductName) !== false) {
            // Le nom du produit correspond, continuer avec le traitement de l'ordonnance
            session()->flash('order_validated', true);
            return redirect()->back()->with('success', 'Votre ordonnance a été téléchargée et validée.');
        } else {
            // Le nom du produit ne correspond pas
            return redirect()->back()->with('error', 'Le nom du produit dans l\'ordonnance ne correspond pas au produit sélectionné.');
        }
    }

    // Fonction pour convertir le contenu du fichier PDF en texte brut
    // private function pdfToText($content)
    // {
    //     // Créer une instance du parseur PDF
    //     $parser = new Parser();

    //     // Traiter le contenu PDF
    //     $pdf = $parser->parseContent($content);

    //     // Extraire le texte brut du PDF
    //     $text = $pdf->getText();

    //     return $text;
    // }
}
