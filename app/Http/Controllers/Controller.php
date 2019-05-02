<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    //
    public function showUsers()
    {
        $users = User::all();

        return response()->json($users, 200);
    }

    public function addUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name; 
        $user->firstname = $request->firstname;
        $user->email = $request->email;
        $user->job = $request->job;
        $user->is_active = 1;

        $user->save();

        return response()->json($user, 200);
    }

    public function showOneUser($id)
    {
        $user = User::find($id);

        return response()->json($user, 200);
    }
}
