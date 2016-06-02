@extends('layouts.layout')
@section('title') Crear Usuario @endsection
@section('page-title') Crear Usuario @endsection
@section('content')
    {!! Form::model($user, ['url' => route('users.store'), 'method' => 'POST']) !!}
        @include('users.partials.form', ['submit_text' => 'Guardar'])
    {!! Form::close() !!}
@endsection
