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
                <th>Costo-tienda</th>
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
                    <td> ${{ $order->store_cost }} </td>
                    <td> ${{ $order->client_cost }} </td>
                    <td> ${{ $order->weekly_amount }} </td>
                    <td> {{ $order->weeks }} </td>
                    <td>
                        <a class="btn btn-info fa fa-pencil" href="{!! route('series.orders.edit', [$order->serie->id, $order->id]) !!} "></a>
                        <a href="http://tiendaenlinea.priceshoes.com/herramientas/catalogos-virtuales" class="btn btn-orange fa fa-eye" target="_blank" title="Ver catalogo"></a>
                    @if ($order->user)
                            <a class="btn btn-delete btn-danger fa fa-trash-o" data-name=" {{ $order->user->full_name }} " href="{!! route('orders.delete', $order) !!}"></a>
                        @else
                            <a class="btn btn-delete btn-danger fa fa-trash-o" data-name=" {{ $order->folio }} " href="{!! route('orders.delete', $order) !!}"></a>
                        @endif
                    </td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><strong>Total:</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td> {{ $totalStoreCost }} </td>
                <td> {{ $totalClientCost }} </td>
                <td> {{ $totalWeeklyAmount }} </td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Costo-tienda</th>
                <th>Costo-cliente</th>
                <th>Importe-semanal</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
    </table>
</div>
