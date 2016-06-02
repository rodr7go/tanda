@extends('layouts.layout')
@section('title') Nueva tanda @endsection
@section('page-title') Nueva tanda @endsection
@section('content')
    {!! Form::model( $serie, [ 'url' => route('series.store', $serie), 'method' => 'POST' ] )  !!}
        @include('series.partials.form', [ 'submit_text' => 'Guardar' ])
    {!! Form::close() !!}
@endsection