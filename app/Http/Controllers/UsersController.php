<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\EditUserRequest;
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

    public function create()
    {
        app(CreateUserRequest::class);        

        return view('dashboard.users.create');
    }

    public function edit($id)
    {
        app(EditUserRequest::class);        
        $user = User::findOrFail($id);
        return view('dashboard.users.edit', compact('user'));
    }
}
