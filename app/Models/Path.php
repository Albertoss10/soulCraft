<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    use UUID;

    protected $fillable = ['path', 'user_id'];

}
