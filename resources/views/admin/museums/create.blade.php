@extends('layouts.app')

@section('content')
<h1>Aggiungi un nuovo museo</h1>
<form action="{{route('admin.museums.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome museo</label>
        <input type="text" class="form-control" id="name"  name="name">
      </div>
      <div class="mb-3">
        <label for="nation" class="form-label">Nazione</label>
        <input type="text" class="form-control" id="nation"  name="nation">
      </div>
      <button type="submit">Invia</button>

@endsection
