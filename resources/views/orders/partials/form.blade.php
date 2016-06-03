<div class="row">

    {!! Form::hidden('serie_id', $serie->id) !!}

    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('full_name', 'Nombre') !!}
            {!! Form::select('user_id', $users, null,  ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('product', 'Producto') !!}
            {!! Form::text('product', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('page', 'Pagina') !!}
            {!! Form::text('page', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('id_product', 'ID') !!}
            {!! Form::text('id_product', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('numb_size', 'Numero o talla') !!}
            {!! Form::text('numb_size', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('model', 'Modelo') !!}
            {!! Form::text('model', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('store_cost', 'Costo Tienda') !!}
            {!! Form::text('store_cost', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('client_cost', 'Costo Cleinte') !!}
            {!! Form::text('client_cost', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('weekly_amount', 'Importe semanal') !!}
            {!! Form::text('weekly_amount', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    @if (isset($order))
        <div class="col-xs-12">
            <div class="col-xs-6">
                <h5>Pagadas</h5>
                @for( $i = 1; $i <= $order->weeks; $i++ )
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('weeks', 'Semana'. $i, [ 'class' => 'm-r-sm' ]) !!}
                            {!! Form::checkbox('weeks[]', 1, true) !!}
                        </div>
                    </div>
                @endfor
            </div>
            <div class="col-xs-6">
                <h5>Sin Pago</h5>
                @for( $i = ++$order->weeks; $i <= $order->total_weeks; $i++ )
                    <div class="col-md-4">
                        <div class="form-group">
                            {!! Form::label('weeks', 'Semana'. $i, [ 'class' => 'm-r-sm' ]) !!}
                            {!! Form::checkbox('weeks[]', 1, false) !!}
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    @endif
</div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::submit($submit_text, ['class' => 'btn pull-right btn-success']) !!}
<a class="btn btn-dark pull-right" href=" {{ URL::previous() }} ">Cancelar</a>
<div class="clearfix"></div>