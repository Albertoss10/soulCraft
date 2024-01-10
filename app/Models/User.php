<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use UUID;

    protected $fillable = ['username'];

    public string $skinPath;

    public static function all($columns = ['*'])
    {
        return User::query()
            ->orderBy('updated_at', 'desc')
            ->paginate(9);
    }

    public static function allUsers($columns = ['*'])
    {
        return User::query()
            ->orderBy('updated_at', 'desc');
    }
}
