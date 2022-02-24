@extends('layouts.base')


@section('content')
    <div class="container">
        <div class="row">
            <h1 class="h1">Admin - All Comics</h1>
        </div>
        <div class="row">
            <div class="col mt-4 mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Add new Comic</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                 <table class="table table-warning">
                    <thead>
                        <tr class="table-danger">
                            <th>Title</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>View</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->author }}</td>
                            <td>{{ $comic->price }} €</td>
                            <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a></td>
                            <td><a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $comics->links() }}
            </div>
        </div>
    </div>
@endsection    
   