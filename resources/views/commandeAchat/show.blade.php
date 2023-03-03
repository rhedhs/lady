@extends('layouts.app')
@section('content')
    <div>
    <h1>Fiche Des donnees de client numero {{ $commandeAchat->id }}</h1>
        <p>Numero De fournisseur : {{ $commandeAchat->fournisseur_id}}</p>
        <p>Date Commande : {{ $commandeAchat->datecom }}</p>

    </div>
@endsection