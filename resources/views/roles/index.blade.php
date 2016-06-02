@extends('layouts.layout')
@section('title') Perfiles @endsection
@section('page-title') Perfiles @endsection
@section('content')
    <div class="portlet box">
        <div class="portlet-header"><h4>Lista de perfiles</h4>
            <a class="btn btn-yellow" href="{{ route('roles.create') }}">Nuevo perfil</a>
        </div>
        <div class="portlet-body">
            @include('roles.partials.table')
        </div>
    </div>
@endsection