<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class RegisteredAdminController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validation des données
        $request->validate([
            'username' => 'required|string|max:150|unique:admins,username',
            'email' => 'required|string|email|max:150|unique:admins,email',
            'mot_de_passe' => 'required|string|confirmed', //
        ], [
            'confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);

        // Vérification des mots de passe identiques
        if ($request->mot_de_passe !== $request->mot_de_passe_confirmation) {
            return back()->withErrors([
                'mot_de_passe' => 'Les mots de passe ne correspondent pas.',
            ]);
        }

        // Création d'un nouvel administrateur
        Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'mot_de_passe' => bcrypt($request->mot_de_passe),
        ]);

        // Redirection après l'inscription
        return redirect('/loginForm');
    }
}
