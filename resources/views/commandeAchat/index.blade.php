@extends('layouts.app')
@section('content')
<style>
    body {
	background-image: url("second.jpg");
	background-size: cover;
	background-position: center;
}
</style>
    <div class="d-flex flex-column justify-content-center align-items-center gap-3">
        <div><a href="{{ route('commandeAchat.create') }}" class="btn btn-dark text-white">Create</a></div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>fournisseur</th>
                    <th>Datecommande</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($commandeAchat as $commandeAchat)
                    <tr>
                        <td>{{ $commandeAchat->fournisseur_id}} </td>
                        <td>{{ $commandeAchat->datecom }} </td>


                        <td>
                            <div class="d-flex  justify-content-around">
                                <a class="btn btn-outline-warning"
                                    href="{{ route('commandeAchat.show', $commandeAchat->id) }}">Afficher</a>
                                <a class="btn btn-outline-secondary"
                                    href="{{ route('commandeAchat.edit', $commandeAchat->id) }}">Modifier</a>
                                <form action="{{ route('commandeAchat.destroy', $commandeAchat->id) }}" method="POST"
                                    onSubmit="return confirm('Vous vouller vraiment supprimer ce Commande ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

    </div>
@endsection