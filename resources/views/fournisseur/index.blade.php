@extends('layouts.app')
@section('content')
<style>
    body {
	background-image: url("wall.jpg");
	background-size: cover;
	background-position: center;
}
</style>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="mx-auto" style="width: 1200px;">
            <br><br>
            <div>
                <h1 style="display:flex; justify-content: center">Les fournisseurs </h1>
            </div>
            <br><br><br>

            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Nom de l'entreprise</th>
                        <th>phone</th>
                        <th>Email</th>
                        <th>city</th>
                        <th>Adress</th>
                        <th>Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fournisseurs as $fournisseur)
                        <tr>
                            <td>{{ $fournisseur->nom }} </td>
                            <td>{{ $fournisseur->telephone }} </td>
                            <td>{{ $fournisseur->email }} </td>
                            <td>{{ $fournisseur->ville }} </td>
                            <td>{{ $fournisseur->adresse }} </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('fournisseur.show', $fournisseur->id) }}">
                                        <button class="btn btn-outline-info">Afficher</button>
                                    </a>
                                    <a href="{{ route('fournisseur.edit', $fournisseur->id) }}">
                                        <button class="btn btn-outline-info">Modifier</button>
                                    </a>
                                    <form action="{{ route('fournisseur.destroy', $fournisseur->id) }}" method="POST"
                                        onSubmit="return confirm('Vous vouller vraiment supprimer ce fournisseur ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-secondary" type="submit">Supprimer</button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-center">{{ $fournisseurs->links() }}</div>

            <br><br>
            <div>
                <a class="d-flex justify-content-center" href="{{ route('fournisseur.create') }}">
                    <button class="btn btn-info">Ajouter un nouveau </button>
                </a>
            </div>


        </div>
    @endsection
