@extends('layouts.app')

@section('title', 'Lista de entrenadores')

@section('content')
    <p>Listado de entrenadores</p>
    <div class="row">
        @foreach($trainers as $trainer)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem;">
                    <img style="height: 100px; width: 100px; background-color: #efefef;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$trainer->name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="/trainers/{{$trainer->slug}}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection