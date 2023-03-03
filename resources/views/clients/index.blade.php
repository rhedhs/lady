@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center gap-3">
        <div><a href="{{ route('clients.create') }}" class="btn btn-dark text-white">Create</a></div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>clients_id</th>
                    <th>datecom</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->nom }} </td>
                        <td>{{ $client->prenom }} </td>
                        <td>{{ $client->email }} </td>
                        <td>{{ $client->adresse }} </td>
                        <td>
                            <div class="d-flex  justify-content-around">
                                <a class="btn btn-success" href="{{ route('clients.show', $client->id) }}">Afficher</a>
                                <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Modifier</a>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST"
                                    onSubmit="return confirm('Vous vouller vraiment supprimer ce client ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $clients->links() }}
    </div>
@endsection
