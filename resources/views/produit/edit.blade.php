@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('produit.update', $produit->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>{{ __('type_produits_id') }}</label>
                <div>
                    <input type="text" name="type_produits_id" value="{{ $produit->type_produits_id }}"
                        class="form-control mb-1 @error('type_produits_id') is-invalid @enderror">
                </div>
                @error('type_produits_id')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('libelle') }}</label>
                <select name="libelle" id="libelle">
                    @foreach ($typeProduits as $typeProduit)
                        <option value="{{ $typeProduit->id }}" name='libelle'>{{ $typeProduit->libelle }}</option>
                    @endforeach

                </select>
                @error('libelle')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>{{ __('prix') }}</label>
                <div>
                    <input type="prix" name="prix" value="{{ $produit->prix }}"
                        class="form-control mb-1 @error('prix') is-invalid @enderror">
                </div>
                @error('prix')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('description') }}</label>
                <div>
                    <input type="text" name="description" value="{{ $produit->description }}"
                        class="form-control mb-1 @error('description') is-invalid @enderror">
                </div>
                @error('description')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Image --}}
            <div>
                <label>{{ __('qtStock') }}</label>
                <div>
                    <input type="text" name="qtStock" value="{{ $produit->qtStock }}"
                        class="form-control mb-1 @error('qtStock') is-invalid @enderror">
                </div>
                @error('qtStock')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
    </div>
@endsection
