<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Videogames System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

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
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videogames as $videogame)
                        <tr>
                            <th scope="row">{{$videogame->id}}</th>
                            <td>{{$videogame->name}}</td>
                            <td>{{$videogame->genre}}</td>
                            <td>{{$videogame->release_date}}</td>
                            <td>{{$videogame->description}}</td>
                            <td>{{$videogame->rating}}</td>
                            <td>${{number_format($videogame->price, 0, ',', '.')}}</td>
                            <td>{{$videogame->is_multiplayer ? 'Si' : 'No'}}</td>
                            <td>{{$videogame->platform}}</td>
                            {{-- <td><a class="btn btn-success" href="/videogames/{{$videogame->id_videogame}}/edit">Edit</td> --}}
                            <td><a class="btn btn-success" href="{{route('videogames.edit', $videogame)}}">Edit</td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
