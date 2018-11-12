@extends('layouts.app')

@section('title', 'Editar entrenador')

@section('content')
    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('slug', 'Slug') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('avatar', 'Avatar') !!}
        {!! Form::file('name', null, ['class' => 'form-control-file']) !!}
    </div>

    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    {{--<form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">--}}
        {{--@method('PUT')--}}
        {{--@csrf--}}
        {{--<div class="form-group">--}}
            {{--<label for="">Nombre</label>--}}
            {{--<input type="text" name="name" class="form-control" value="{{$trainer->name}}">--}}
        {{--</div>--}}
        {{--<img style="height: 100px; width: 100px; background-color: #efefef;"--}}
             {{--class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}" alt="">--}}
        {{--<div class="form-group">--}}
            {{--<label for="">Avatar</label>--}}
            {{--<input type="file" name="avatar" class="form-control-file">--}}
        {{--</div>--}}
        {{--<button type="submit" class="btn btn-primary">Guardar</button>--}}
    {{--</form>--}}

@endsection