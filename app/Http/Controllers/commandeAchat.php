<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use App\Models\commandeAchat as ModelscommandeAchat;
use Illuminate\Http\Request;

class commandeAchat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandeAchat = ModelscommandeAchat::paginate(2);

        // dd($commandeAchat);
        return view('commandeAchat.index', ['commandeAchat' => $commandeAchat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseur = fournisseur::all();
        return view('commandeAchat.create', ['fournisseur' => $fournisseur]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'fournisseur_id' => 'required',
            'datecom' => 'required',

        ]);
        // $cmd =  new commandeAchat();

        ModelscommandeAchat::create($request->post());
        return redirect()->route('commandeAchat.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commandeAchat = \App\Models\commandeAchat::find($id);
        return view('commandeAchat.show', compact('commandeAchat'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(ModelscommandeAchat $commandeAchat)
    {
        $fournisseur = fournisseur::all();
        return view('commandeAchat.edit', ['commandeAchat' => $commandeAchat, 'fournisseur ' => $fournisseur]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelscommandeAchat $commandeAchat)
    {
        $request->validate([
            'fournisseur_id' => 'required',
            'datecom' => 'required',

        ]);

        $commandeAchat->fill($request->post())->save();
        return redirect()->route('commandeAchat.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */

    public function destroy(ModelscommandeAchat $commandeAchat)
    {
        $commandeAchat->delete();

        return redirect()->route('commandeAchat.index');
    }
}
