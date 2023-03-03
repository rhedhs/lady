@extends('layouts.app')
@section('content')
    <div>
        <h1>Fiche Des donnees de client numero {{ $commandeVente->id }}</h1>
        <p>Numero De Client : {{ $commandeVente->clients_id }}</p>
        <p>Date Commande : {{ $commandeVente->datecom }}</p>

    </div>
@endsection
