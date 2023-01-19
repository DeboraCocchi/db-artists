@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $artist->name }}</h1>
            </div>


        </div>
        <a href="{{ route('comics.index') }}" class="btn btn-light m-5">Torna indietro</a>
    </div>
@endsection
