<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('first_name', 'Nombre') !!}
            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('last_name', 'Apellido') !!}
            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('Perfil') !!}
            {!! Form::select('role_id', $roles, null,  ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('phone', 'Telefono') !!}
            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('email', 'Correo Electronico') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Confirmar Contraseña') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
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
