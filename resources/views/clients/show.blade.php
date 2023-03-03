@extends('layouts.app')
@section('content')
    <div>
        <h1>Fiche Des donnees de client numero {{ $client->id }}</h1>
        <p>Nom : {{ $client->nom }}</p>
        <p>Prenom : {{ $client->prenom }}</p>
        <p>Email : {{ $client->email }}</p>
        <p>Adresse : {{ $client->adresse }}</p>
    </div>
@endsection

