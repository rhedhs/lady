@extends('layouts.app')
@section('content')
    <style>
        body {
            background-image: url("bear.png");
            background-size: cover;
            background-position: center;
        }
    </style>
    <div class="d-flex flex-column justify-content-center align-items-center gap-3">
        <div><a href="{{ route('produit.create') }}" class="btn btn-outline-secondary">Create produit</a></div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>type_produits_id</th>
                    <th>libelle</th>
                    <th>prix</th>
                    <th>image</th>

                    <th>qtStock</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>{{ $produit->id }} </td>
                        <td>{{ $produit->type_produits_id }} </td>
                        <td>{{ $produit->libelle }} </td>
                        <td>{{ $produit->prix }} </td>
                        {{-- <td>{{ $produit->image }} </td> --}}
                        <td><img src="{{ asset('/storage/' . 'image/' . $produit->image) }}" alt="" width="100px"
                                height="100px">
                        </td>
                        <td>{{ $produit->qtStock }} </td>

                        <td>
                            <div class="d-flex  justify-content-around">
                                <a class="btn btn-outline-success"
                                    href="{{ route('produit.show', $produit->id) }}">Afficher</a>
                                <a class="btn btn-outline-primary"
                                    href="{{ route('produit.edit', $produit->id) }}">Modifier</a>
                                <form action="{{ route('produit.destroy', $produit->id) }}" method="POST"
                                    onSubmit="return confirm('Vous vouller vraiment supprimer ce client ?')">
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
        {{ $produits->links() }}
    </div>
@endsection
