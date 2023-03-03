@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('commandeAchat.store') }}" method="POST">
            @csrf
            <select name="fournisseur_id" id="fournisseur_id">
                @foreach ($fournisseur as $fournisseur)
                    <option value="{{ $fournisseur->id }}">{{ $fournisseur->nom }}</option>
                @endforeach

            </select>
            <div>
                {{-- <label>{{ __('fournisseur_id') }}</label>
                <div>
                    <input type="hidden" name="fournisseur_id" value="{{ old('fournisseur_id') }}"
                        class="form-control mb-1 @error('fournisseur_id') is-invalid @enderror">
                </div> --}}
                @error('fournisseur_id')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('datecom') }}</label>
                <div>
                    <input type="date" name="datecom" value="{{ old('datecom') }}"
                        class="form-control mb-1 @error('datecom') is-invalid @enderror">
                </div>
                @error('datecom')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>

    </div>

    <button class="btn btn-success mt-1" type="submit">Create</button>
    </form>
    </div>
@endsection
