<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requests\UsersShowRequest;
use Illuminate\Http\Request;
use App\User;
use DB;


class UsersController extends Controller
{
 
    
    public function index()
    {
        app(UsersShowRequest::class);        
        return 1;
    }

    public function perfil(){

        $usuario = User::findOrFail(auth()->user()->id);

        return view('dashboard.users.profile',compact('usuario'));
    }



}
