@extends('layouts.layout')
@section('title') {{ $title }} @endsection
@section('page-title') {{ $title }} @endsection

@section('content')

    <div class="portlet box">
        <div class="portlet-header"><h4>Lista de {{ $title }}</h4>
            <a class="btn btn-yellow" href="{{ route('users.create') }}"> Agregar miembro</a>
        </div>
        <div class="portlet-body">
            @include('users.partials.table')
        </div>
    </div>

@endsection