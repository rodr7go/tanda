@extends( 'layouts.layout' )
@section( 'title' ) Editar pedido @endsection
@section( 'page-title' ) Editar pedido @endsection
@section( 'content' )
    {!! Form::model($orders, [ 'url' => route('orders.update', $orders), 'method' => 'PUT' ]) !!}
        @include('orders.partials.form', [ 'submit_text' => 'Guardar cambios' ])
    {!! Form::close() !!}
@endsection