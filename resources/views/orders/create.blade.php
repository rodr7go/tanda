@extends('layouts.layout')
@section('title') Nuevo Pedido de {{ $serie->name }} @endsection
@section('page-title') Nuevo Pedido de {{ $serie->name }} @endsection
@section('content')
    {!! Form::open( [ 'url' => route('orders.store'), 'method' => 'POST' ]) !!}
        @include('orders.partials.form', ['submit_text' => 'Guardar pedido'])
    {!! Form::close() !!}
@endsection