<?php

namespace App\Http\Controllers;

use App\Models\typeProduit as ModelsTypeProduit;
use Illuminate\Http\Request;

class typeProduit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeProduit = ModelsTypeProduit::paginate(2);
        return view('typeProduit.index', ['typeProduits' => $typeProduit]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeProduit.create');
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
                'libelle' => 'required',

            ]);

            echo "<b>Libelle : </b>" . $request->input('libelle') . "<br>";
        }

        $request->validate([
            'libelle' => 'required',

        ]);

        ModelsTypeProduit::create($request->post());
        return redirect()->route('typeProduit.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsTypeProduit $typeProduit)
    {
        return view('typeProduit.show', ['typeProduit' => $typeProduit]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsTypeProduit $typeProduit)
    {
        return view('typeProduit.edit', ['typeProduit' => $typeProduit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ModelsTypeProduit $typeProduit)
    {
        $request->validate([
            'libelle' => 'required',

        ]);


        $typeProduit->fill($request->post())->save();
        return redirect()->route('typeProduit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsTypeProduit $typeProduit)
    {
        $typeProduit->delete();
        return redirect()->route('typeProduit.index');
    }
}
