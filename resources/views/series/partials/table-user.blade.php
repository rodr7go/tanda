<table class="table table-striped dynatable">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Fecha de inicio</th>
        <th>Fecha de fin</th>
        <th>Responsable</th>
        <th>Numero de Semanas</th>
        <th>Categoria</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $series as $serie )
        <tr>
            <td><a href="{!! route('series.orders.index', $serie->id) !!}">{{ $serie->name }} </a></td>
            <td> {{ $serie->start_date}} </td>
            <td> {{ $serie->ending_date }} </td>
            <td> {{ $serie->responsible->full_name }} </td>
            <td> {{ $serie->week_number }} </td>
            <td> {{ $serie->category }} </td>
        </tr>
    @endforeach
    </tbody>
</table>