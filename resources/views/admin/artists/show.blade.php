@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row  mt-5 ms-5">
            <div class="col">
                <h1>{{ $artist->name }}</h1>
            </div>


        </div>
        <a href="{{ route('admin.artists.index') }}" class="btn btn-light m-5">Torna indietro</a>
    </div>
@endsection
