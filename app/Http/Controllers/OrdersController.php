<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Order;
use App\Serie;
use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\CreateOrderRequest;
use App\Http\Requests\Orders\EditOrderRequest;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($serie_id = null)
    {
        $serie = Serie::findOrFail($serie_id);
        if (\Entrust::hasRole([ 'admin' ]))
            $orders = Order::where('serie_id', $serie->id)->get();
        else
            $orders = Order::where('serie_id', $serie->id)->where('user_id', \Auth::user()->id)->get();

        $totals = [
            'storeCost' =>  Order::totalStoreCost($serie_id),
            'clientCost' => Order::totalClientCost($serie_id),
            'weeklyAmount' => Order::totalWeeklyAmount($serie_id),
            'weekPayments' => Order::totalWeekPayments($serie_id),
            'totalGain' => Order::totalGain($serie_id),
        ];

        return view('orders.index', compact('orders', 'serie', 'totals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($serie_id = null)
    {
        $users = User::lists('first_name', 'id');
        $serie = Serie::findOrFail($serie_id);
        return view('orders.create', compact('users', 'serie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest $request)
    {
        $serie_id = $request->get('serie_id');
        $order = Order::create($request->all());

        return redirect()->route('series.orders.index', $serie_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($serie_id = null, $id)
    {
        $serie = Serie::findOrFail($serie_id);
        $users = User::lists('first_name', 'id');
        $users->prepend('', 0);
        $order = Order::findOrFail($id);

        return view('orders.edit', compact('order', 'users', 'serie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditOrderRequest $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->except('weeks'));
        $order->weeks = count($request->get('weeks'));
        $order->save();
        $serie_id = $request->get('serie_id');

        return redirect()->route('series.orders.index', $serie_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $serie_id = $order->serie->id;
        $order->delete();

        return redirect()->route('series.orders.index', $serie_id);
    }
}