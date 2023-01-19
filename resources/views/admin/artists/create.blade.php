@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>inserisci un nuovo artista</h1>

        <form action="{{ route('artists.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">nome</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                    value="{{ old('name') }}" placeholder="Inserire il titolo">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary mb-5">Invia</button>
        </form>
    </div>
@endsection
