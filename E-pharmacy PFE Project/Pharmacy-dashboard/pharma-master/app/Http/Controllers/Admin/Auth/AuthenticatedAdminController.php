<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Notifications\SendVerificationCodeNotification;
use Illuminate\Notifications\Notification;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

use function Ramsey\Uuid\v1;

class AuthenticatedAdminController extends Controller
{
    /*************Login************/

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


    /***********Profile*********/

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
        ]);

        // Récupérer l'utilisateur authentifié via le garde "admin"
        $admin = Admin::find(auth('admin')->user()->id);

        // Mise à jour du profil de l'admin
        $admin->username = $request->username;
        $admin->email = $request->email;

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Déplacement de la nouvelle image vers le répertoire de stockage
            $image->move(public_path('img'), $imageName);

            // Suppression de l'ancienne image si elle existe
            if ($admin->photo !== 'img/default-avatar.png') {
                unlink(public_path($admin->photo));
            }

            // Mise à jour du chemin de l'image dans la base de données
            $admin->photo = 'img/' . $imageName;
        }

        $admin->save();

        FacadesAlert::success("Profil mis à jour \n\n avec succés");

        return back()->with('success', 'Profil mis à jour avec succès.');
    }

    public function updatePassword(Request $request)
    {
        // Validation des données
        $request->validate([
            'mdp_actuel' => 'required|string',
            'nv_mdp' => 'required|string',
            'confirm_mdp' => 'required|string',
        ]);

        // Récupérer l'utilisateur authentifié
        $admin = Auth::guard('admin')->user();

        // Vérifier si le mot de passe actuel est correct
        if (!Hash::check($request->mdp_actuel, $admin->mot_de_passe)) {
            return redirect()->back()->withErrors(['mdp_actuel' => 'Le mot de passe actuel est incorrect.']);
        }

        // Vérifier si le nouveau mot de passe est différent du mot de passe actuel
        if ($request->nv_mdp === $request->mdp_actuel) {
            return redirect()->back()->withErrors(['nv_mdp' => 'Le nouveau mot de passe doit être différent du mot de passe actuel.']);
        }

        // Vérifier si le nouveau mot de passe correspond à sa confirmation
        if ($request->nv_mdp !== $request->confirm_mdp) {
            return redirect()->back()->withErrors(['confirm_mdp' => 'Le nouveau mot de passe et sa confirmation ne correspondent pas.']);
        }

        // Mettre à jour le mot de passe
        $admin->mot_de_passe = bcrypt($request->nv_mdp);
        $admin->save();

        FacadesAlert::success("Mot de passe mis à jour avec succés");

        return back()->with('success', 'Mot de passe mis à jour \n\n avec succès.');
    }

    /***********Forgot password***********/

    public function verifyEmailForm() {
        return view('auth.verify-email');
    }

    public function sendVerificationCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'email_confirm' => 'required|email|same:email',
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin) {
            return back()->withErrors(['email' => 'Adresse e-mail non trouvée.']);
        }

        // Générer et envoyer le code de vérification
        $verificationCode = mt_rand(100000, 999999); // Génère un code aléatoire
        $admin->notify(new SendVerificationCodeNotification($verificationCode));

        // Stockez le code de vérification dans la base de données
        $admin->verification_code = $verificationCode;
        $admin->save();

        // Rediriger vers le formulaire de vérification du code avec l'e-mail en tant que paramètre de requête
        return redirect()->route('verify.code.form', ['email' => $request->email]);
    }

    public function showVerifyCodeForm(Request $request)
    {
        $email = $request->query('email');

        return view('auth.verify-code', compact('email'));
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'verification_code' => 'required|string',
            'email' => 'required|email',
        ]);

        $email = $request->input('email');
        $admin = Admin::where('email', $email)->first();

        if (!$admin) {
            return back()->withErrors(['email' => 'Adresse e-mail non trouvée.']);
        }

        // Récupérer le code de vérification de l'administrateur
        $storedCode = $admin->verification_code;

        // Vérifier si le code entré correspond au code stocké
        if ($request->verification_code == $storedCode) {
            // Marquer l'e-mail comme vérifié
            $admin->markEmailAsVerified();
            return redirect()->route('reset.password.form', ['email' => $email]);
        } else {
            return redirect()->back()->withErrors(['verification_code' => 'Le code de vérification est incorrect.']);
        }
    }

    public function showResetPasswordForm(Request $request)
    {
        $email = $request->query('email');

        if (!$email) {
            // Gérer le cas où l'e-mail n'est pas disponible dans la requête
            return redirect()->route('verification.form')->with('error', 'Veuillez vérifier votre e-mail d\'abord.');
        }
        return view('auth.reset-password', compact('email'));
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mot_de_passe' => 'required|string|min:8|confirmed',
            'mot_de_passe_confirmation' => 'required|string|min:8|same:mot_de_passe',
        ]);

        $email = $request->input('email');

        $admin = Admin::where('email', $email)->first();

        if (!$admin) {
            return back()->withErrors(['email' => 'Adresse e-mail non trouvée.']);
        }

        if ($request->mot_de_passe !== $request->mot_de_passe_confirmation) {
            FacadesAlert::error("Le nouveau mot de passe et \n\n sa confirmation ne correspondent \n\n pas.");

            return back()->withErrors(['mot_de_passe_confirmation' => 'Le nouveau mot de passe et sa confirmation ne correspondent pas.']);
        }

        // Mettre à jour le mot de passe si la validation réussit
        $admin->mot_de_passe = bcrypt($request->mot_de_passe);
        $admin->save();

        FacadesAlert::success("Mot de passe réinitialisé \n\n avec succès. \n\n Veuillez vous connecter.");

        return redirect('/loginForm')->with('success', 'Mot de passe réinitialisé avec succès. Veuillez vous connecter.');
    }

}
