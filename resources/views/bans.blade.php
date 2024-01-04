<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SoulCraft Bans</title>
  <link rel="stylesheet" href="/css/bans.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>

<body>

  <div class="container">
    <header>
      <h1>
        <span>Usuarios</span>
      </h1>
    </header>

    <div class="search-container">
      <i id="icono" class="fas fa-search"></i>
      <input type="text" id="search-box" placeholder="Buscar..." onkeypress="searchOnEnter(event)">
    </div>
    <div class="user-grid">
      @foreach ($users as $user)
      <div class="user-card">
        <a href="/{{ $user->id }}">{{ $user->username }}</a>
      </div>
      @endforeach
    </div>
    <div id="search-popup" class="popup">
      <!-- Los resultados de la búsqueda se inyectarán aquí -->
    </div>
  </div>

</body>

</html>
