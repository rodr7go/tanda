@extends('layouts.layout')
@section('title') Editar perfil @endsection
@section('page-title') Editar perfil @endsection
@section('content')
    {!! Form::model($role, [ 'url' => route('roles.update', $role), 'method' => 'PUT' ] ) !!}
        @include('roles.partials.form', [ 'submit_text' => 'Guardar cambios' ])
    {!! Form::close() !!}
@endsection