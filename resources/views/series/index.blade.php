@extends('layouts.layout')
@section('title') Tandas @endsection
@section('page-title') Tandas @endsection
@section('content')
    <div class="portlet box">
        <div class="portlet-header"><h4>Lista de tandas</h4>
            <a class="btn btn-yellow" href="{{ route('series.create') }}">Nueva tanda</a>
        </div>
        <div class="portlet-body">
            @include('series.partials.table')
        </div>
    </div>
@endsection