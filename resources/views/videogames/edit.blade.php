<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Videogame System</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="alert alert-info text-center">Edit videogame {{$videogame->name}}</h1>
                </div>
                <div class="col-12">
                    <form action="{{ route('videogames.update', $videogame) }}" method="post" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$videogame->name}}" placeholder="Name">
                        </div>
                        <div class="col-6">
                            <label for="genre" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="genre" name="genre" value="{{$videogame->genre}}" placeholder="Alias">
                        </div>
                        <div class="col-6">
                            <label for="release_date" class="form-label">Release Date</label>
                            <input type="date" class="form-control" id="release_date" name="release_date" value="{{$videogame->release_date}}" placeholder="Release Date">
                        </div>
                        <div class="col-6">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description">{{$videogame->description}}</textarea>
                        </div>
                        <div class="col-6">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating" value="{{$videogame->rating}}" placeholder="Rating">
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{$videogame->price}}" placeholder="Price">
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Is multiplayer?</label>
                            <select name="is_multiplayer" id="is_multiplayer" class="form-control">
                                <option value="false" {{($videogame->is_multiplayer === false) ? 'selected' : ''}}>No</option>
                                <option value="true" {{($videogame->is_multiplayer === true) ? 'selected' : ''}}>Yes</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="platform" class="form-label">platform</label>
                            <select name="platform" id="platform" class="form-control">
                                @foreach ($platforms as $platform)
                                    <option value="{{$platform}}" {{($videogame->platform === $platform->value) ? 'selected' : ''}}>{{$platform}}</option>
                                    {{-- TODO: Mejorar --}}
                                    {{-- @if ( $videogame->platform === $platform->value )
                                        <option value="{{$platform}}" selected>{{$platform}}</option>
                                    @else
                                        <option value="{{$platform}}">{{$platform}}</option>
                                    @endif --}}

                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 my-4">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 mb-4">
                    <div class="d-grid gap-2">
                        <a href="{{route('videogames.index')}}" class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
