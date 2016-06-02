@extends('layouts.layout')
@section('title') Nuevo perfil @endsection
@section('page-title') Nuevo perfil @endsection
@section('content')
    {!! Form::open( [ 'url' => route('roles.store'), 'method' => 'POST' ] ) !!}
        @include('roles.partials.form', [ 'submit_text' => 'Guardar perfil' ])
    {!! Form::close() !!}
@endsection