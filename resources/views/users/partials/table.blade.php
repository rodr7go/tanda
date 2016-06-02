<div class="table-responsive">
    <table class="table table-striped dynatable">
        <thead>
        <tr>
            <th>Nombre completo</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Perfil</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td> {{ $user->full_name }} </td>
                <td> {{ $user->phone }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->roles->first()['display_name'] }} </td>
                <td>
                    <a class="btn btn-info fa fa-pencil" href="{!! route('users.edit', $user) !!} "></a>
                    <a class="btn btn-danger btn-delete fa fa-trash-o" data-name=" {{ $user->full_name }} " href="{!! route('users.delete', $user) !!}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

