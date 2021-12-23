<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;


class UsersController extends Controller
{
    
    public function perfil(){

        $usuario = User::findOrFail(auth()->user()->id);

        return view('dashboard.users.profile',compact('usuario'));
    }



}
