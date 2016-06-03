@extends( 'layouts.layout' )
@section( 'title' ) Editar pedido @endsection
@section( 'page-title' ) Editar pedido @endsection
@section( 'content' )
    {!! Form::model($order, [ 'url' => route('orders.update', $order), 'method' => 'PUT' ]) !!}
        @include('orders.partials.form', [ 'submit_text' => 'Guardar cambios' ])
    {!! Form::close() !!}
@endsection