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
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="mb-3">
                    <label for="page" class="form-label">Page</label>
                    <input type="text" class="form-control" id="page" name="page">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="available" class="form-label">Available</label>
                    <input type="text" class="form-control" id="available" name="available">
                </div>
                <input class="btn btn-primary" type="submit" value="Invia">
            </form>
        </div>
    </div>
</div>

@endsection