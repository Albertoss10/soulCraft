<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $user->username }}</title>
  <link rel="stylesheet" href="{{ asset('css/ban.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    @yield('content')
</body>
<script src="{{ asset('js/ban.js') }}"></script>
</html>
