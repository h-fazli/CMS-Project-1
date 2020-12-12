<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users',$users);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        return view('admin.users.show')->with('user',$user);
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        $user->delete();
    }

    public function activate(User $user)
    {
            $user->isActive = true;
            $user->save();

    }

    public function deactivate(User $user)
    {
            $user->isActive = false;
            $user->save();
    }
}
