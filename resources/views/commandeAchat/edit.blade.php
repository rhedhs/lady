@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('commandeAchat.update', $commandeAchat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>{{ __('fournisseur ID') }}</label>
                <div>
                    <input type="text" name="fournisseur_id" value="{{ $commandeAchat->fournisseur_id }}"
                        class="form-control mb-1 @error('fournisseur_id') is-invalid @enderror">
                </div>
                @error('fournisseur_id')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('datecom') }}</label>
                <div>
                    <input type="text" name="datecom" value="{{ $commandeAchat->datecom }}"
                        class="form-control mb-1 @error('datecom') is-invalid @enderror">
                </div>
                @error('datecom')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>


            <button class="btn btn-primary" type="submit">Modifier</button>
        </form>
    </div>
@endsection
