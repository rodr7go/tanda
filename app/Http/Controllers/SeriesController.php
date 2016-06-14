<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Serie;
use App\Http\Requests\Series\EditSerieRequest;
use App\Http\Requests\Series\CreateSerieRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::with('responsible')->get();

        return view('series.index', compact('series'));
    }

    public function getSeriesByUser()
    {
        $series = User::getSeriesByUser();
        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serie = new Serie;
        $users = User::all()->lists('full_name', 'id');
        $categories = [
            '0' => '',
            'Tenis' => 'Tenis',
            'Zapatos' => 'Zapatos',
            'Ropa' => 'Ropa',
            'Varios' => 'Varios'
        ];
        return view('series.create', compact('serie', 'users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSerieRequest $request)
    {
        $serie = Serie::create($request->all());

        return redirect()->route('series.index');
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
    public function edit($id)
    {
        $serie = Serie::findOrFail($id);
        $users = User::all()->lists('full_name', 'id');
        $categories = [
            '0' => '',
            'Tenis' => 'Tenis',
            'Zapatos' => 'Zapatos',
            'Ropa' => 'Ropa',
            'Varios' => 'Varios'
        ];

        return view('series.edit', compact('serie', 'users', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditSerieRequest $request, $id)
    {
        $serie = Serie::findOrFail($id);
        $serie->update($request->all());

        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serie = Serie::findOrFail($id);

        if ($serie->has('orders'))
        {
            foreach($serie->orders as $order)
            {
                $order->delete();
            }
        }
        $serie->delete();

        return redirect()->route('series.index');
    }
}
