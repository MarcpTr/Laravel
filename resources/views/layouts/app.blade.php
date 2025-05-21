<!DOCTYPE html>
<html>
<head>
    <title>NotasApp</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Inicio</a> |
        <a href="{{ route('notas.index') }}">Notas</a>
    </nav>
    <hr>
    @yield('content')
</body>
</html>
