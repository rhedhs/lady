@extends('layouts.app')
@section('content')
    <div>
        <form action="{{ route('commandeVente.update', $commandeVente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label>{{ __('Clients ID') }}</label>
                <div>
                    <input type="text" name="clients_id" value="{{ $commandeVente->clients_id }}"
                        class="form-control mb-1 @error('clients_id') is-invalid @enderror">
                </div>
                @error('clients_id')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('datecom') }}</label>
                <div>
                    <input type="text" name="datecom" value="{{ $commandeVente->datecom }}"
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
