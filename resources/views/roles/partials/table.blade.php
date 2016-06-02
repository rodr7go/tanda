<table class="table table-striped dynatable">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Nombre para mostrar</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $roles as $role )
            <tr>
                <td> {{ $role->name }} </td>
                <td> {{ $role->display_name }} </td>
                <td> {{ $role->description }} </td>
                <td>
                    <a class="btn btn-info fa fa-pencil" href="{!! route('roles.edit', $role) !!} "></a>
                    <a class="btn btn-delete btn-danger fa fa-trash-o" data-name=" {{ $role->display_name }} " href="{!! route('roles.delete', $role) !!}"></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>