@extends('layouts.layout')
@section('title') Tandas @endsection
@section('page-title') Tandas @endsection
@section('content')
    <div class="portlet box">
        <div class="portlet-header"><h4>Lista de tandas</h4>
            @if (Entrust::hasRole('admin'))
                <a class="btn btn-yellow" href="{{ route('series.create') }}">Nueva tanda</a>
            @endif
        </div>
        <div class="portlet-body">
            @if (Entrust::hasRole('admin'))
                @include('series.partials.table-admin')
            @else
                @include('series.partials.table-user')
            @endif
        </div>
    </div>
@endsection