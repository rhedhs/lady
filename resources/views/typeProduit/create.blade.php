@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('typeProduit.store') }}" method="POST">
            @csrf
            <div>
                <label>{{ __('libelle') }}</label>
                <div>
                    <input type="text" name="libelle" value="{{ old('libelle') }}"
                        class="form-control mb-1 @error('libelle') is-invalid @enderror">
                </div>
                @error('libelle')
                    <div class="alert alert-danger text-danger">{{ $message }}</div>
                @enderror
            </div>

    </div>

    <button class="btn btn-success mt-1" type="submit">Create</button>
    </form>
    </div>
@endsection
