@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="mt-3">Elenco dei progetti</h1>

        <a href="{{ route('admin.artists.create') }}" class="btn btn-success mt-3">Aggiungi un nuovo artista</a>

        <div class="row">
            <div class="col mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome Artista</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artists as $artist)
                            <tr>
                                <th scope="row">{{ $artist->id }}</th>
                                <td>{{ $artist->name }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.artists.show', $artist) }}" class="btn btn-primary mx-1"
                                        title="show"><i class="fa-regular fa-eye"></i></a>
                                    <a class="btn btn-warning mx-1" href="{{ route('admin.artists.edit', $artist) }}"
                                        title="edit"><i class="fa-solid fa-pencil"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
