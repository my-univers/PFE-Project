<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AuthenticatedAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validation des données
        $request->validate([
            'username' => 'required|string|max:150',
            'mot_de_passe' => 'required|string'
        ]);

        // Récupération de l'utilisateur
        $admin = Admin::where('username', $request->username)->first();

        // Vérification de l'utilisateur et de son mot de passe
        if ($admin && Hash::check($request->mot_de_passe, $admin->mot_de_passe)) {
            // Connexion réussie
            Auth::guard('admin')->login($admin);

            // Redirection vers le profil de l'administrateur
            return redirect('/dashboard');
        }

        // Redirection si la connexion échoue
        return back()->withErrors([
            'username' => 'Les identifiants fournis sont incorrects.',
            'mot_de_passe' => 'Les identifiants fournis sont incorrects.',
        ]);
    }

/**
     * Log the admin out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/loginForm');
    }

    public function showProfile()
    {
        // Sélectionnez les informations de l'admin depuis la table admins
        $admin = Admin::find(auth('admin')->user()->id);

        return view('profile.edit', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        // Vérifier si l'utilisateur est connecté
        if (!Auth::guard('admin')->check()) {
            return redirect()->back()->with('error', 'Utilisateur non authentifié.');
        }

        // Validation des données
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validez le champ photo
        ]);

        // Récupérer l'utilisateur authentifié via le garde "admin"
        $admin = Admin::find(auth('admin')->user()->id);

        // Mise à jour du profil de l'admin
        $admin->username = $request->username;
        $admin->email = $request->email;

        if ($request->hasFile('photo')) {
            // Vérifiez s'il y a des erreurs lors du téléchargement
            if ($request->file('photo')->getError()) {
                return redirect()->back()->withErrors(['photo' => 'Erreur lors du téléchargement de l\'image.']);
            }

            // Enregistrer la nouvelle photo
            $image = $request->file('photo');
            $imageName = time() . '_' . $image->getClientOriginalName(); // Utilisez le nom original de l'image
            $imagePath = $image->storeAs('img', $imageName); // Enregistrer la nouvelle image dans le répertoire de stockage

            // Débogage
            // dd($imagePath);

            // Mettre à jour le chemin de la nouvelle photo
            $admin->photo = $imagePath;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Profil mis à jour avec succès.');
    }

}
