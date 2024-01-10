<?php

namespace App\Console\Commands;

use App\Http\Controllers\StorageController;
use App\Http\Controllers\UserController;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class UpdateSkins extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-skins';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $users = UserController::allUsers();
        foreach($users as $user){
            $response = Http::get("https://mc-heads.net/avatar/$user->username/100.png");
            if ($response->successful()) {
                $imageContents = $response->body();
                $path = "public/userSkins/$user->username.png";
                StorageController::put($path, $imageContents);
            }
        }
    }
}
