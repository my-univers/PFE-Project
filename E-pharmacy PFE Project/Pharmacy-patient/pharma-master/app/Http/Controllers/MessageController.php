<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;
use Alert;

class MessageController extends Controller
{
    public function addMessage(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'message' => 'nullable',
        ]);
    
        Contact::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'message' => $request->message,
        ]);
    
    FacadesAlert::success('Message envoyé avec succès');

    return back();
    }
    
}