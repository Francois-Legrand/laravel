<?php

namespace App\Http\Controllers;

use App\Client;
use App\Entreprise;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
    
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        $entreprises = Entreprise::all();
        $client = new Client();

        return view('clients.create', compact('entreprises', 'client'));
    }

    public function store()
    {
        $data = request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

       Client::create($data);

        return redirect('clients/create')->with('addClient','Votre client à bien été ajouté !');
    }
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        $entreprises = Entreprise::all();

        return view('clients.edit', compact('client', 'entreprises'));
    }

    public function update(Client $client)
    {
        $data = request()->validate([

            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|integer'
        ]);

        $client->update($data);

        return redirect('clients/'.$client->id)->with('updateClient','Votre client à bien été actualisé !');
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return redirect('clients')->with('suppClient','Votre client à bien été supprimé !');;
    }
}
