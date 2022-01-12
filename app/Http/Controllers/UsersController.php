<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserIndexRequest;s
use App\User;

class UsersController extends Controller
{
 
    
    public function index()
    {
        app(UserIndexRequest::class);        

        $users = User::where('type', '!=', User::ADMIN_ROLE)->get();
        return 'users';
        return $users;
    }

    public function show($id)
    {
//        app(UserShowRequest::class);        

        $user = User::findOrFail($id);
        return 'user';
    }


    public function perfil(){

        $usuario = User::findOrFail(auth()->user()->id);

        return view('dashboard.users.profile',compact('usuario'));
    }



}
