@extends('layouts.app')

@section('content')
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$museum->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$museum->nation}}</h6>
      <a href="{{route('admin.museums.index')}}" class="card-link btn btn-primary">Torna all'elenco</a>
    </div>
  </div>
@endsection
