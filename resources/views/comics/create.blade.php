@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('comics.store')}}"
            method="post">
            @csrf
            @method('POST')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title">

                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author">

                    @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="page" class="form-label">Page</label>
                    <input type="text" class="form-control" id="page" name="page">

                    @error('page')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image">

                    @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description">

                    @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">

                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="available" class="form-label">Available</label>
                    <input type="text" class="form-control" id="available" name="available">

                    @error('available')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <input class="btn btn-primary" type="submit" value="Invia">
                <a class="btn btn-primary" href="{{ url()->previous() }}">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection