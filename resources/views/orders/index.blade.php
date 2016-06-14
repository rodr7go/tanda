@extends('layouts.layout')
@section('title') Pedidos @endsection
@section('page-title') Pedidos de la tanda: {{ $serie->name }} @endsection
@section('content')
    <div class="portlet box">
        <div class="portlet-header"><h4>Lista de pedidos</h4>
            @if (Entrust::hasRole('admin'))
                <a class="btn btn-yellow" href="{{ route('series.orders.create', $serie->id) }}">Nuevo Pedido</a>
            @endif
        </div>
        <div class="portlet-body">
            @if (Entrust::hasRole('admin'))
                @include('orders.partials.table-admin')
            @else
                @include('orders.partials.table-user')
            @endif
        </div>
    </div>
@endsection