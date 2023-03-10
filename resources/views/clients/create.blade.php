@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div>
                <label>{{ __('Nom') }}</label>
                <div>
                    <input type="text" name="nom" value="{{ old('nom') }}"
                        class="form-control mb-1 @error('nom') is-invalid @enderror">
                </div>
                @error('nom')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('prenom') }}</label>
                <div>
                    <input type="text" name="prenom" value="{{ old('prenom') }}"
                        class="form-control mb-1 @error('prenom') is-invalid @enderror">
                </div>
                @error('prenom')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Email') }}</label>
                <div>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="form-control mb-1 @error('email') is-invalid @enderror">
                </div>
                @error('email')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>{{ __('Adresse') }}</label>
                <div>
                    <input type="text" name="adresse" value="{{ old('adresse') }}"
                        class="form-control mb-1 @error('adresse') is-invalid @enderror">
                </div>

















            </div>

            <button class="btn btn-success mt-1" type="submit">Create</button>
        </form>
    </div>
@endsection
