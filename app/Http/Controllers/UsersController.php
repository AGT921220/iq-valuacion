<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\IndexUserRequest;
use App\Http\Requests\User\ShowUserRequest;
use App\User;

class UsersController extends Controller
{
 
    
    public function index()
    {
        app(IndexUserRequest::class);        
        $users = User::where('type', '!=', User::ADMIN_ROLE)->get();
        return view('dashboard.users.index', compact('users'));
    }

    public function show($id)
    {
        app(ShowUserRequest::class);        
        $user = User::findOrFail($id);
        return view('dashboard.users.show', compact('user'));
    }

    public function edit($id)
    {
        app(ShowUserRequest::class);        
        $user = User::findOrFail($id);
        return view('dashboard.users.edit', compact('user'));
    }


    public function perfil(){

        $usuario = User::findOrFail(auth()->user()->id);

        return view('dashboard.users.profile',compact('usuario'));
    }



}
