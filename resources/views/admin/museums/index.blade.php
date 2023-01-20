@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Nationality</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($museums as $museum)
            <tr>
                <td>{{$museum->id}}</td>
                <td>{{$museum->name}}</td>
                <td>{{$museum->nation}}</td>
                <td class="d-flex">
                    <a href="{{ route('admin.museums.show', $museum) }}" class="btn btn-primary mx-1"
                        title="show"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-warning mx-1" href="{{ route('admin.museums.edit', $museum) }}"
                        title="edit"><i class="fa-solid fa-pencil"></i></a>
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>
@endsection
