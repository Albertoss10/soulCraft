<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoulCraft Bans</title>
    <link rel="stylesheet" href="/css/bans.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color: #333333;">
<img class="logo" src="{{ resource_path() . 'soulCraft/logo.png' }}" width="100" height="100">

<div class="container">
    <header>
        <h1>
            <span class="usuarios">USUARIOS</span>
        </h1>
    </header>


    <div class="user-grid">
        @foreach ($users as $user)
            <div class="user-card">
                <img class="skin" src="{{ Storage::url('userSkins/' . $user->username . '.png') }}" width="100"
                     height="100">
                <a class="nick" href="/{{ $user->id }}">{{ $user->username }}</a>
            </div>
        @endforeach
    </div>
    <div class="small-arrows">
        {{ $users->links() }}
    </div>
</div>
</body>
</html>
