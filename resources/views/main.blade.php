@extends('layouts.home')

@section('page-title', 'Home')

@section('main')

<div class="container">
    <h1 class="text-center text-dark">FILM </h1>
    <div class="row">
        @foreach ( $movies as $element)
        <div class="card g-3 me-4 bg-success border-dark" style="width: 18rem;">
            <div class="card-body">
              <h4 class="card-title text-center text-white">{{$element->title}}</h5>
              <p class="card-text text-center text-white">Titolo originale: {{$element->original_title}}</p>
              <p class="card-text text-center text-white">Paese di produzione: {{$element->nationality}}</p>
              <p class="card-text text-center text-white">Anno: {{$element->date}}</p>
              <p class="card-text text-center text-white">Voto: {{$element->vote}}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
