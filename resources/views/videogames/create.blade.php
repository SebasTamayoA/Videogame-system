@extends('layouts.base')
@section('content') {{-- @yield('content') --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="alert alert-info text-center">Create new videogame</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('videogames.store') }}" method="post" class="row">
                    @csrf
                    <div class="col-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                            value="{{ old('name') }}" @error('name') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre"
                            value="{{ old('genre') }}" @error('genre') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="release_date" class="form-label">Release Date</label>
                        <input type="date" class="form-control" id="release_date" name="release_date"
                            placeholder="Release Date" value="{{ old('release_date') }}"
                            @error('release_date') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Description"
                            @error('description') is-invalid @enderror>{{ old('description') }}
                    </textarea>
                    </div>
                    <div class="col-6">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating" placeholder="Rating"
                            value="{{ old('rating') }}" @error('rating') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Price"
                            value="{{ old('price') }}" @error('price') is-invalid @enderror>
                    </div>
                    <div class="col-6">
                        <label for="price" class="form-label">Is multiplayer?</label>
                        <select name="is_multiplayer" id="is_multiplayer" class="form-control">
                            <option value="false" {{ old('is_multiplayer') === 'false' ? 'selected' : '' }}>No</option>
                            <option value="true" {{ old('is_multiplayer') === 'true' ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="platform" class="form-label">Platform</label>
                        <select name="platform" id="platform" class="form-control">
                            @foreach ($platforms as $platform)
                                <option value="{{ $platform }}"
                                    {{ old('platform') === $platform->value ? 'selected' : '' }}>
                                    {{ $platform }}</option>
                            @endforeach
                        </select>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger col-12 mt-4">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="col-12 my-4">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 mb-4">
                <div class="d-grid gap-2">
                    <a href="{{ route('videogames.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
