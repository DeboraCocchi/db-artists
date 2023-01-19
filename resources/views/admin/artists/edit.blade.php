@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">nome</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $artist->name }}"
                    placeholder="Inserire il nome">
            </div>

            <button type="submit" class="btn btn-primary mb-5">Invia</button>
        </form>

    </div>
@endsection
