<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Path;
use Illuminate\Http\Request;

class PathController extends Controller
{
    public static function addPathDatabase($request, $user)
    {
        return Path::create([
            'user_id' => $user->id
        ]);
    }
}
