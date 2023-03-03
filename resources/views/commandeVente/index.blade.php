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
        <div><a href="{{ route('commandeVente.create') }}" class="btn btn-dark text-white">Create</a></div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Nomdu  Clients</th>
                    <th>Datecommande</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($commandeVente as $commande)
                    <tr>
                        <td>{{ $commande->clients->nom }} </td>
                        <td>{{ $commande->datecom }} </td>


                        <td>
                            <div class="d-flex  justify-content-around">
                                <a class="btn btn-outline-warning"
                                    href="{{ route('commandeVente.show', $commande->id) }}">Afficher</a>
                                <a class="btn btn-outline-secondary"
                                    href="{{ route('commandeVente.edit', $commande->id) }}">Modifier</a>
                                <form action="{{ route('commandeVente.destroy', $commande->id) }}" method="POST"
                                    onSubmit="return confirm('Vous vouller vraiment supprimer ce Commande ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{-- @foreach ($commande as $item)
                    <div>{{ $item['datecom'] }}</div>
                @endforeach --}}
            </tbody>
        </table>
        {{ $commandeVente->links() }}
    </div>
@endsection
