<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public static function all()
    {
        return User::all();
    }

    public static function allUsers()
    {
        return User::allUsers();
    }


    public static function find($id)
    {
        return User::where('username', $id)->first();
    }

    public static function addUserDatabase($request)
    {
        return User::firstOrCreate([
            'username' => $request->username
        ]);
    }
}
