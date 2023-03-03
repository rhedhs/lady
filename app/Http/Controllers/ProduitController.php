<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Http\Requests\StoreproduitsRequest;
use App\Http\Requests\UpdateproduitsRequest;
use App\Models\Client;
use App\Models\typeProduit;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = produit::paginate(2);
        return view('produit.index', ['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeProduit = typeProduit::all();

        return view('produit.create', ['typeProduits' => $typeProduit]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproduitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproduitsRequest $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'type_produits_id' => 'required',
                'libelle' => 'required',
                'prix' => 'required',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                'description' => 'required',
                'qtStock' => 'required'
            ]);



            echo "<b>type_produits_id : </b>" . $request->input('type_produits_id') . "<br>";
            echo "<b>libelle : </b>" . $request->input('libelle') . '<br>';
            echo "<b>prix : </b>" . $request->input('prix') . '<br>';
            echo "<b>image : </b>" . $request->input('image') . '<br>';
            echo "<b>description : </b>" . $request->input('description') . '<br>';
            echo "<b>qtStock : </b>" . $request->input('qtStock') . '<br>';
        }
        // $image = $request->file('image');

        // produit:

        $request->validate([
            'type_produits_id' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'image' => 'required',
            'description' => 'required',
            'qtStock' => 'required'
        ]);
        //    produit::create($request->post());
        $produit = new produit([
            'type_produits_id' => $request->get('type_produits_id'),
            'libelle' => $request->get('libelle'),
            'prix' => $request->get('prix'),
            'image' => $request->image->hashName(),
            'description' => $request->get('description'),
            'qtStock' => $request->get('qtStock')
        ]);
        // dd($produit);

        $produit->save();

        $request->file('image')->store("image", 'public');

        return redirect()->route('produit.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function show(produit $produit)
    {
        return view('produit.show', ['produits' => $produit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(produit $produit)
    {
        $typeProduit = typeProduit::all();
        return view('produit.edit', ['produit' => $produit, 'typeProduits' => $typeProduit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproduitsRequest  $request
     * @param  \App\Models\produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproduitsRequest $request, produit $produit)
    {
        $request->validate([
            'type_produits_id' => 'required',
            'libelle' => 'required',
            'prix' => 'required',
            'description' => 'required',
            'qtStock' => 'required'
        ]);
        $produit->update($request->post());
        return redirect()->route('produit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produit.index');
    }
}
