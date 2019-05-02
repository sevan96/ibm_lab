<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\User;

class Controller extends BaseController
{
    //
    public function showUsers()
    {
        $users = User::all();

        return response()->json($users, 200);
    }
}
