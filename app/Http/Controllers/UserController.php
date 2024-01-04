<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public static function addUserDatabase($request)
    {
        return User::firstOrCreate([
            'username' => $request->username
        ]);
    }
}
