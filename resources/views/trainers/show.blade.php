@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
    <img style="height: 100px; width: 100px; background-color: #efefef;"
         class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">
    <div class="text-center">
        <h5 class="card-title">
            {{$trainer->name}}
        </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    </div>
@endsection