<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedAdminController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validation des données
        $credentials = $request->validate([
            'username' => 'required|string|max:150',
            'mot_de_passe' => 'required|string'
        ]);

        // Tentative de connexion
        if (Auth::guard('admin')->attempt($credentials)) {
            // Redirection si la connexion réussit
            return redirect('/dashboard');
        }

        // Redirection si la connexion échoue
        return back()->withErrors([
            'username' => 'Les identifiants fournis sont incorrects.',
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

}
