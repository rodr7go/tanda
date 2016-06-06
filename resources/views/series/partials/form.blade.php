<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('start_date', 'Fecha de inicio') !!}
            {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('ending_date', 'Fecha de fin') !!}
            {!! Form::date('ending_date', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('user_id', 'Responsable') !!}
            {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('week_number', 'Numero de semanas') !!}
            {!! Form::number('week_number', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('category', 'Categoria') !!}
            {!! Form::select('category', $categories, null , [ 'class' => 'form-control' ]) !!}
        </div>
    </div>
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

{!! Form::submit($submit_text, ['class' => 'btn btn-success pull-right']) !!}
<a class="btn btn-dark pull-right" href=" {{ URL::previous() }} ">Cancelar</a>
<div class="clearfix"></div>
