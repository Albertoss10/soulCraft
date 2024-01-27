<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Path;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PathController extends Controller
{
    public static function addPathDatabase($request, $user)
    {
        return Path::create([
            'user_id' => $user->id
        ]);
    }

    public static function getPathsUser($username) {
        $id = User::where('username', $username)->first()->id;
        return Path::select('id', 'path', 'user_id', DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d %H:%i") as formatted_date'))
            ->where('user_id', $id)
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy('formatted_date');
    }
}
