@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Nationality</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($museums as $museum)
            <tr>
                <td>{{$museum->id}}</td>
                <td>{{$museum->name}}</td>
                <td>@{{$museum->nation}}</td>
            </tr>

            @endforeach
        </tbody>
      </table>
@endsection
