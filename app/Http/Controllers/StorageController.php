<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public static function addStorage($path, $filename, $contents)
    {
        Storage::put($path . $filename, $contents);
    }
}
