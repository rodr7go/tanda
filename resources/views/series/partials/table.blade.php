<table class="table table-striped dynatable">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Fecha de inicio</th>
        <th>Fecha de fin</th>
        <th>Responsable</th>
        <th>Numero de Semanas</th>
        <th>Categoria</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $series as $serie )
        <tr>
            <td><a href="{!! route('series.orders.index', $serie->id) !!}">{{ $serie->name }} </a></td>
            <td> {{ $serie->start_date}} </td>
            <td> {{ $serie->ending_date }} </td>
            <td> {{ $serie->responsible }} </td>
            <td> {{ $serie->week_number }} </td>
            <td> {{ $serie->category }} </td>
            <td>
                <a class="btn btn-dark fa fa-plus" title="Crear pedido" href=" {!! route('series.orders.create', $serie->id) !!} "></a>
                <a class="btn btn-info fa fa-pencil" title="Editar" href="{!! route('series.edit', $serie) !!} "></a>
                <a class="btn btn-delete btn-danger fa fa-trash-o" title="Eliminar" data-name=" {{ $serie->name }} " href="{!! route('series.delete', $serie) !!}"></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>