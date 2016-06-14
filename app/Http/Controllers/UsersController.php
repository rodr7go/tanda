<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;

use App\Http\Requests\Users\CreateUserRequest;
use App\Http\Requests\Users\EditUserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($role_name = null)
    {
        $role = Role::where('name', $role_name)->firstOrFail();

        if ($role_name == 'admin')
            $title = 'Administradores';
        else
            $title = 'Usuarios';
        
        $users = $role->users;

        return view('users.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User;
        $roles = Role::lists('name', 'id');

        return view('users.create', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = User::create($request->all());
        $user->password = bcrypt($user->password);
        $user->attachRole($request->get('role_id'));
        $user->update();
        $role = $user->roles->first()->name;

        return redirect()->route('users.index.role', $role);
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
        $user = User::findOrFail($id);
        $roles = Role::lists('name', 'id');

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->roles()->sync([$request->get('role_id')]);
        $role = $user->roles->first()->name;
        $user->update();

        return redirect()->route('users.index.role', $role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrfail($id);
        $role = $user->roles->first()->name;
        $user->delete();
        return redirect()->route('users.index.role',$role);
    }
}