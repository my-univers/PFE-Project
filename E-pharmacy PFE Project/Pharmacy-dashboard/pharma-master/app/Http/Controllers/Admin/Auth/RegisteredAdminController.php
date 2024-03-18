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
        ]);

        // Création d'un nouvel administrateur
        $admin = new Admin([
            'username' => $request->username,
            'email' => $request->email,
            'mot_de_passe' => bcrypt($request->mot_de_passe),
            'photo' => 'img/default-avatar.png',
        ]);

        // Gestion de l'image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('img', $imageName);
            $admin->photo = $imagePath; // Enregistrer le chemin de l'image dans la base de données
        }

        $admin->save();

        // Redirection après l'inscription
        return redirect('/loginForm');
    }
}
