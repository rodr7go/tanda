<div class="table-responsive">
    <table class="table table-striped dynatable">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Folio</th>
                <th>Producto</th>
                <th>Pagina</th>
                <th>Modelo</th>
                <th>ID(producto)</th>
                <th>Numero o talla</th>
                <th>Costo-cliente</th>
                <th>Importe-semanal</th>
                <th>Pagos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>
                        @if ($order->user)
                            {{ $order->user->full_name }}
                        @else
                            Sin usuario
                        @endif
                    </td>
                    <td> {{ $order->folio  }} </td>
                    <td> {{ $order->product }} </td>
                    <td> {{ $order->page }} </td>
                    <td> {{ $order->model }} </td>
                    <td> {{ $order->id_product }} </td>
                    <td> {{ $order->numb_size}} </td>
                    <td> ${{ $order->client_cost }} </td>
                    <td> ${{ $order->weekly_amount }} </td>
                    <td> {{ $order->weeks }} </td>
                    <td>
                        <a href="http://tiendaenlinea.priceshoes.com/herramientas/catalogos-virtuales" class="btn btn-orange fa fa-eye" target="_blank" title="Ver catalogo"></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
