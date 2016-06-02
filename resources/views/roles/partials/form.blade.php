<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('display_name', 'Nombre para mostrar') !!}
            {!! Form::text('display_name', null, [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('description', 'Descripcion') !!}
            {!! Form::text('description', null, [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
</div>
{!! Form::submit($submit_text, [ 'class' => 'pull-right btn btn-success' ]) !!}
<a class="btn btn-dark pull-right" href=" {{ URL::previous() }} ">Cancelar</a>
<div class="clearfix"></div>
