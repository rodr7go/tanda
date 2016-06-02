<div class="table-responsive">
    <table class="table table-striped dynatable">
        <thead>
            <tr>
                <th>Nombre Completo</th>z
                <th>Folio</th>
                <th>Producto</th>
                <th>Pagina</th>
                <th>Modelo</th>
                <th>ID(producto)</th>
                <th>Numero o talla</th>
                <th>Costo-tienda</th>
                <th>Costo-cliente</th>
                <th>Importe-semanal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                @if ($order->user)
                    <td> {{ $order->user->full_name }} </td>
                @else
                    <td>Sin usuario</td>
                @endif
                <td> {{ $order->folio  }} </td>
                <td> {{ $order->product }} </td>
                <td> {{ $order->page }} </td>
                <td> {{ $order->model }} </td>
                <td> {{ $order->id_product }} </td>
                <td> {{ $order->numb_size}} </td>
                <td> {{ $order->store_cost }} </td>
                <td> {{ $order->client_cost }} </td>
                <td> {{ $order->weekly_amount }} </td>
                <td>
                    <a class="btn btn-info fa fa-pencil" href="{!! route('series.orders.edit', [$order->serie->id, $order->id]) !!} "></a>
                    @if ($order->user)
                        <a class="btn btn-delete btn-danger fa fa-trash-o" data-name=" {{ $order->user->full_name }} " href="{!! route('orders.delete', $order) !!}"></a>
                    @else
                        <a class="btn btn-delete btn-danger fa fa-trash-o" data-name=" {{ $order->folio }} " href="{!! route('orders.delete', $order) !!}"></a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
