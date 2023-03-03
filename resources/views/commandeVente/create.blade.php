@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('commandeVente.store') }}" method="POST">
            @csrf
            <select name="clients_id" id="clients_id">
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" name='client_id'>{{ $client->nom }}</option>
                @endforeach

            </select>
            <div>
                {{-- <label>{{ __('clients_id') }}</label>
                <div>
                    <input type="hidden" name="clients_id" value="{{ old('clients_id') }}"
                        class="form-control mb-1 @error('clients_id') is-invalid @enderror">
                </div> --}}
                @error('clients_id')
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
