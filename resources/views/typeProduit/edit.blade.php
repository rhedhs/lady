@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('typeProduit.update', $typeProduit->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>{{ __('Libelle') }}</label>
                <div>
                    <input type="text" name="libelle" value="{{ $typeProduit->libelle }}"
                        class="form-control mb-1 @error('libelle') is-invalid @enderror">
                </div>
                @error('libelle')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button class="btn btn-outline-primary" type="submit">Modifier</button>
        </form>
    </div>
@endsection
