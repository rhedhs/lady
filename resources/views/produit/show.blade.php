@extends('layouts.app')
@section('content')
    <div>
        <h1>Fiche Des donnees de Produit ID {{ $produits->id }}</h1>
        <p>type_produits_id : {{ $produits->type_produits_id }}</p>
        <p>libelle : {{ $produits->libelle }}</p>
        <p>prix : {{ $produits->prix }}</p>
        <p><img src="{{ asset('/storage/' . $produits->image) }}" alt="" width="100px" height="100px"></p>
        <p>description : {{ $produits->description }}</p>
        <p>qtStock : {{ $produits->qtStock }}</p>

    </div>
@endsection
