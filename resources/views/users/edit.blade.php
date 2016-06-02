@extends('layouts.layout')
@section('title') Editar Usuario @endsection
@section('page-title') Editar Usuario @endsection
@section('content')
    {!! Form::model($user, ['url' => route('users.update', $user), 'method' => 'PUT']) !!}
        @include('users.partials.form', ['submit_text' => 'Guardar Cambios'])
    {!! Form::close() !!}
@endsection