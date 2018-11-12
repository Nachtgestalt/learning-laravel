@extends('layouts.app')

@section('title', 'Creación de entrenadores')

@section('content')
    {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true]) !!}
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

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    {{--<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">--}}
        {{--@csrf--}}
        {{--<div class="form-group">--}}
            {{--<label for="">Nombre</label>--}}
            {{--<input type="text" name="name" class="form-control">--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="">Avatar</label>--}}
            {{--<input type="file" name="avatar" class="form-control-file">--}}
        {{--</div>--}}
        {{--<button type="submit" class="btn btn-primary">Guardar</button>--}}
    {{--</form>--}}
@endsection