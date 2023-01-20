@extends('layouts.app')

@section('content')
<h1>Modifica museo <span class="text-warning">{{$museum->name}}</span></h1>
<form action="{{route('admin.museums.update', $museum)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nome museo</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  name="name" value="{{old('name', $museum->name)}}">
      </div>
      <div class="mb-3">
        <label for="nation" class="form-label">Nazione</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="nation"  name="nation" value="{{old('nation', $museum->nation)}}">
      </div>
      <button type="submit" class="btn btn-warning">Invia</button>

@endsection
