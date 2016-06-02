@extends('layouts.layout')
@section('title') Pedidos @endsection
@section('page-title') Pedidos de la tanda: {{ $serie->name }} @endsection
@section('content')
    <div class="portlet box">
        <div class="portlet-header"><h4>Lista de pedidos</h4>
            <a class="btn btn-yellow" href="{{ route('series.orders.create', $serie->id) }}">Nuevo Pedido</a>
        </div>
        <div class="portlet-body">
            @include('orders.partials.table')
        </div>
    </div>
@endsection