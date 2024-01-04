<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BansController extends Controller
{
    public static function executeBan(Request $request)
    {
        $user = UserController::addUserDatabase($request);

        $path = 'users/' . $user->username;
        if (!Storage::disk('local')->exists($path)) {
            Storage::disk('local')->makeDirectory($path);
        }

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $databasePath = PathController::addPathDatabase($request, $user);
                $filename = $databasePath->id . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs($path, $filename, 'local');
                $databasePath->update([
                    'path' => $path
                ]);
            }
        }

        if($request->has('urls')){
            foreach ($request->urls as $url){
                $databasePath = PathController::addPathDatabase($request, $user);
                $contents = file_get_contents($url);
                $filename = $databasePath->id . '.' .  pathinfo($url, PATHINFO_EXTENSION);
                StorageController::addStorage($path, $filename, $contents);
                $path = storage_path($path . $filename);
                $databasePath->update([
                    'path' => $path
                ]);
            }
        }
    }

    public static function unban()
    {

    }
}
