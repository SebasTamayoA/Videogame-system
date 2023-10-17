@extends('layouts.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Videogames System</h1>
            </div>
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Release Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Price</th>
                            <th scope="col">Multiplayer</th>
                            <th scope="col">Platform</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videogames as $videogame)
                            <tr>
                                <th scope="row">{{ $videogame->id }}</th>
                                <td>{{ $videogame->name }}</td>
                                <td>{{ $videogame->genre }}</td>
                                <td>{{ $videogame->release_date }}</td>
                                <td>{{ $videogame->description }}</td>
                                <td>{{ $videogame->rating }}</td>
                                <td>${{ number_format($videogame->price, 0, ',', '.') }}</td>
                                <td>{{ $videogame->is_multiplayer ? 'Si' : 'No' }}</td>
                                <td>{{ $videogame->platform }}</td>
                                <td><a class="btn btn-primary" href="{{ route('videogames.show', $videogame) }}">View</td>
                                {{-- <td><a class="btn btn-success" href="/videogames/{{$videogame->id_videogame}}/edit">Edit</td> --}}
                                <td><a class="btn btn-success" href="{{ route('videogames.edit', $videogame) }}">Edit</td>
                                <td>
                                    <form action="{{ route('videogames.destroy', $videogame) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        {{-- <a class="btn btn-danger" href="/videogames/{{$videogame->id_videogame}}/delete">Delete</td> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <a href="/videogames/create" class="btn btn-success">Add Videogame</a>
            </div>
        </div>
    </div>
@endsection
