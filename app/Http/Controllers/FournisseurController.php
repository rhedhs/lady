<?php

namespace App\Http\Controllers;

use App\Models\fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fournisseurs = fournisseur::paginate(2);
        return view('fournisseur.index', [ 'fournisseurs' => $fournisseurs ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fournisseur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $request->validate([
                'nom' => 'required',
                'telephone' => 'required',
                'email' => 'required|email',
                'ville' => 'required',
                'adresse' => 'required'
            ]);

            echo "<b>Nom : </b>".$request->input('nom')."<br>";
            echo "<b>Telephone : </b>".$request->input('telephone').'<br>' ;
            echo "<b>Email : </b>".$request->input('email').'<br>';
            echo "<b>Ville : </b>".$request->input('ville').'<br>';
            echo "<b>Adresse : </b>".$request->input('adresse').'<br>';;
        }

        $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'adresse' => 'required'
        ]);

        fournisseur::create($request->post());
           return redirect()->route('fournisseur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(fournisseur $fournisseur)
    {
        return view('fournisseur.show', ['fournisseur' => $fournisseur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(fournisseur $fournisseur)
    {
        return view('fournisseur.edit', ['fournisseur' => $fournisseur]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fournisseur $fournisseur)
    {
        $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'adresse' => 'required'
        ]);

        $fournisseur->fill($request->post())->save();
        return redirect()->route('fournisseur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(fournisseur $fournisseur)
    {
        $fournisseur->delete();
        return redirect()->route('fournisseur.index');
    }
}
