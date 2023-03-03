@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="d-block mb-2">
                    @if (count($typeProduits) == 0)
                        <span class="text-danger">No ID available to add to this field</span>
                    @else
                        <span>Available IDs that can be added to this field: </span>
                        @foreach ($typeProduits as $typeProduit)
                            <span> {{ $typeProduit->id }}</span>
                        @endforeach
                    @endif

                </div>
                <label>{{ __('type_produits_id') }}</label>
                <div>
                    <input type="text" name="type_produits_id" value="{{ old('type_produits_id') }}"
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
                    <input type="prix" name="prix" value="{{ old('prix') }}"
                        class="form-control mb-1 @error('prix') is-invalid @enderror">
                </div>
                @error('prix')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('description') }}</label>
                <div>
                    <input type="text" name="description" value="{{ old('description') }}"
                        class="form-control mb-1 @error('description') is-invalid @enderror">
                </div>
                @error('description')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- Image --}}
            <div>
                <label>{{ __('image') }}</label>
                <div>
                    <input type="file" name="image" value="{{ old('image') }}"
                        class="form-control mb-1 @error('image') is-invalid @enderror">
                </div>
                @error('image')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('qtStock') }}</label>
                <div>
                    <input type="text" name="qtStock" value="{{ old('qtStock') }}"
                        class="form-control mb-1 @error('qtStock') is-invalid @enderror">
                </div>
                @error('qtStock')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success mt-1" type="submit">Create</button>
        </form>
    </div>
@endsection
