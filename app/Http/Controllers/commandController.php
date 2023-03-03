<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\commandeVente;
use Illuminate\Http\Request;

class commandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandeVente = commandeVente::paginate(2);

        // dd($commandeVente);
        return view('commandeVente.index', ['commandeVente' => $commandeVente]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('commandeVente.create', ['clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'clients_id' => 'required',
                'datecom' => 'required',

            ]);

            echo "<b>clients_id : </b>" . $request->input('clients_id') . "<br>";
            echo "<b>datecom : </b>" . $request->input('datecom') . '<br>';
        }

        $request->validate([
            'clients_id' => 'required',
            'datecom' => 'required',

        ]);

        commandeVente::create($request->post());
        return redirect()->route('commandeVente.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(commandeVente $commandeVente)
    {
        // dd($commandeVente);
        return view('commandeVente.show', ['commandeVente' => $commandeVente]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(commandeVente $commandeVente)
    {
        return view('commandeVente.edit', ['commandeVente' => $commandeVente]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commandeVente $commandeVente)
    {
        $request->validate([
            'clients_id' => 'required',
            'datecom' => 'required',

        ]);

        $commandeVente->fill($request->post())->save();
        return redirect()->route('commandeVente.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */

    public function destroy(commandeVente $commandeVente)
    {
        $commandeVente->delete();
        return redirect()->route('commandeVente.index');
    }
}
