<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function showClientsList()
    {
        $clients = Client::paginate(10);
        return view("clients.list", ['clients' => $clients]);
    }

    public function addClientForm()
    {
        return view('clients.add');
    }

    public function addClient(Request $request)
    {
        $client = new Client();

        $nom = $request->nom;
        $adresse = $request->adresse;
        $tele = $request->tele;
        $email = $request->email;

        $client->nom = $nom;
        $client->adresse = $adresse;
        $client->telephone = $tele;
        $client->email = $email;

        $client->save();

        return redirect('/clients/list');
    }

    public function updateClientForm($id)
    {
        $c = Client::find($id);

        return view('clients.update', ['c' => $c]);
    }

    public function updateClient(Request $request, $id)
    {
        $c = Client::find($id);

        $c->nom = $request->nom;
        $c->adresse = $request->adresse;
        $c->telephone = $request->telephone;
        $c->email = $request->email;

        $c->save();

        return redirect('/clients/list');
    }

    public function deleteClient($id)
    {

        $c = Client::find($id);
        $c->delete();

        return redirect('/clients/list');
    }

    public function searchClient(Request $request)
    {
        $search_input = $request->input('search_input');

        $query = Client::query();

        if ($search_input) {
            $query->where('nom', 'like', '%' . $search_input . '%')
                ->orWhere('email', 'like', '%' . $search_input . '%')
                ->orWhere('adresse', 'like', '%' . $search_input . '%');
        }

        // Exécuter la requête
        $clients = $query->paginate(10);

        // Passer les résultats à la vue
        return view('clients.list', ['clients' => $clients]);
    }

}
