<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BansController extends Controller
{
    public static function executeBan(Request $request)
    {
        $user = UserController::addUserDatabase($request);

        $path = 'users/' . $user->username;
        if (!Storage::disk('public')->exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        if ($request->hasFile('file0')) {
            foreach ($request->file() as $file) {
                $databasePath = PathController::addPathDatabase($request, $user);
                $filename = $databasePath->id . '.' . $file->getClientOriginalExtension();
                $updatedPath = $file->storeAs($path, $filename, 'public');
                $databasePath->update([
                    'path' => $updatedPath
                ]);
                $user->touch();
            }
        }
    }

    public static function unban(Request $request)
    {

    }

    public static function showUserBanHistory(String $username){
        if(User::where('username', $username)->count() > 0) {
            return view('ban', [
                'user' => UserController::find($username),
                'paths' => PathController::getPathsUser($username)
            ]);
        } else {
            abort(404);
        }
    }
}
