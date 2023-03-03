@extends('layouts.app')
@section('content')
<style>
    body {
	background-image: url("bg.jpg");
	background-size: cover;
	background-position: center;
}
</style>
    <div class="d-flex flex-column justify-content-center align-items-center gap-3">
        <div><a href="{{ route('typeProduit.create') }}" class="btn btn-outline-secondary">Create type</a></div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libelle</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($typeProduits as $typeProduit)
                    <tr>
                        <td>{{ $typeProduit->id }} </td>
                        <td>{{ $typeProduit->libelle }} </td>

                        <td>
                            <div class="d-flex  justify-content-around">
                                <a class="btn btn-outline-success"
                                    href="{{ route('typeProduit.show', $typeProduit->id) }}">Afficher</a>
                                <a class="btn btn-outline-primary"
                                    href="{{ route('typeProduit.edit', $typeProduit->id) }}">Modifier</a>
                                <form action="{{ route('typeProduit.destroy', $typeProduit->id) }}" method="POST"
                                    onSubmit="return confirm('Are sure u wanna delete this client ?')">
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
        {{ $typeProduits->links() }}
    </div>
@endsection
