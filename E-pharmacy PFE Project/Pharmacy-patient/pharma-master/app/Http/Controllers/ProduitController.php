<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Str;
use Smalot\PdfParser\Parser;
use thiagoalessio\TesseractOCR\TesseractOCR;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Alert;

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

        // Obtention du nom du produit sélectionné et conversion en minuscules
        $product = Produit::find($request->product_id);
        $selectedProductName =  strtolower($product->nom);

        // Vérification si le fichier est un PDF ou une image
        $fileExtension = $request->file('image')->extension();
        if ($fileExtension == 'pdf') {
            // Lecture du texte du PDF
            $pdfText = (new Parser())->parseFile($request->file('image')->path())->getText();
            $pdfText = strtolower($pdfText); // Conversion en minuscules
        } else {
            // Utilisation de l'OCR pour extraire le texte de l'image
            $pdfText = (new TesseractOCR($request->file('image')->path()))
                // ->executable('C:\Program Files\Tesseract-OCR\tesseract')
                ->run();
            $pdfText = strtolower($pdfText); // Conversion en minuscules
        }

        // Recherche du nom du produit dans le texte du PDF
        if (strpos($pdfText, $selectedProductName) !== false) {
            // Le nom du produit correspond, continuer avec le traitement de l'ordonnance
            session()->flash('order_validated', true);

            FacadesAlert::success('Votre ordonnance a été téléchargée et validée!');

            return back();
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
