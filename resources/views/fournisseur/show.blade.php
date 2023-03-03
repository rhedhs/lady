@extends('layouts.app')
@section('content')
    <div>
        <div class="row">
            <div class="col">
              <div class="card shadow">
                <div class="card-body">
                    <div>
                        <h1>Data Fournisseur {{ $fournisseur->id }}</h1>
                        <p><b>Nom de l'entreprise </b> : {{ $fournisseur->nom }}</p>
                        <p><b>Telephone</b> : {{ $fournisseur->telephone }}</p>
                        <p><b>Email</b> : {{ $fournisseur->email }}</p>
                        <p><b>Ville</b> : {{ $fournisseur->ville }}</p>
                        <ap><b>Adresse</b> : {{ $fournisseur->adresse }}</p>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>



@endsection

