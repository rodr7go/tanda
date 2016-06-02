@extends('layouts.layout')
@section('title') Editar tanda @endsection
@section('page-title') Editar tanda @endsection
@section('content')
    {!! Form::model( $serie, [ 'url' => route('series.update', $serie), 'method' => 'PUT' ] )  !!}
        @include('series.partials.form', [ 'submit_text' => 'Guardar Cambios' ])
    {!! Form::close() !!}
@endsection
