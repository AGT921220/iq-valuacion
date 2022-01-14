<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\EditUserRequest;
use App\Http\Requests\User\IndexUserRequest;
use App\Http\Requests\User\ShowUserRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

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
        $userTypes = User::USER_TYPES;

        return view('dashboard.users.create', compact('userTypes'));
    }

    public function edit($id)
    {
        app(EditUserRequest::class);
        $user = User::findOrFail($id);
        $userTypes = User::USER_TYPES;

        return view('dashboard.users.edit', compact('user','userTypes'));
    }

    public function store(StoreUserRequest $request)
    {

        $foto = '/images/profile-empty.png';
        $foto = null;

        if ($request->input('user_profile')) {
            $file = $request->input('user_profile');
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/profiles', $filename);
            $foto = '/images/profiles/' . $filename;
        }

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->type = $request->input('type');
        $user->paternal_surname = $request->input('paternal_surname');
        $user->maternal_surname = $request->input('maternal_surname');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        $user->user_profile = $foto;
        if ($user->save()) {
            return back()->with('success', User::USER_CREATE_SUCCESSFUL);
        }
        return back()->with('success', User::USER_CREATE_ERROR);
    }

    public function update(UpdateUserRequest $request)
    {

        $user = User::findOrFail($request->route('usuario'));


        if ($request->user_profile) {
            $file = $request->user_profile;
            $filename = time() . $file->getClientOriginalName();
            $file->move(public_path() . '/images/profiles', $filename);
            $foto = '/images/profiles/' . $filename;
            $user->user_profile = $foto;

        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->type = $request->input('type');
        $user->paternal_surname = $request->input('paternal_surname');
        $user->maternal_surname = $request->input('maternal_surname');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        if ($user->save()) {
            return back()->with('success', User::USER_UPDATE_SUCCESSFUL);
        }
        return back()->with('success', User::USER_UPDATE_ERROR);
    }

}
