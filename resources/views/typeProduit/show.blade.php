@extends('layouts.app')
@section('content')
    <div>
        <h1> Cette fiche de données de client :{{ $typeProduit->id }}</h1>
        <p>Libelle : {{ $typeProduit->libelle }}</p>

    </div>
@endsection
