<?php

use App\Http\Controllers\BansController;
use App\Http\Controllers\PathController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $users = UserController::all();

    return view('bans', [
        'users' => $users
    ]);
});

Route::get('/{user}', function ($id) {
    if(User::where('username', $id)->count() > 0) {
        return view('ban', [
            'user' => UserController::find($id),
            'paths' => PathController::getPathsUser($id)
        ]);
    } else {
        return 404;
    }
});

Route::post('/user/executeBan', [BansController::class, 'executeBan']

);
