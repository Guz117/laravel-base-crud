@extends('layouts.base')

@section('content')

<div class="container">
        <div class="row">
            <div class="col">
                <h2>Modify {{ $comic->name }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">

                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ $comic->author }}">

                        @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="page" class="form-label">Page</label>
                        <input type="text" class="form-control" id="page" name="page" value="{{ $comic->page }}">

                        @error('page')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="text" class="form-control" id="image" name="image" value="{{ $comic->image }}">

                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">

                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">

                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="available" class="form-label">available</label>
                        <input type="text" class="form-control" id="available" name="available"
                            value="{{ $comic->available }}">

                         @error('available')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror    
                    </div>


                    <input type="submit" class="btn btn-primary" value="Salva">
                    <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
                </form>
            </div>
        </div>
    </div>

@endsection