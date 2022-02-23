@extends('layouts.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                 <h1>{{ $comics->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
              <img class="fluid-img" src=" {{$comic->image }}" alt="{{$comic->name}}">
            </div>
            <div class="col">
              <div>{{ $comic->description }}</div>
              <div><h2>{{  $comic->price }} €</h2></div>
            </div>
        </div>
    </div>
   
@endsection