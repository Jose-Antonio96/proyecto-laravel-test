<!DOCTYPE html>
<html lang=”es”>
<head>
	<meta charset=”UTF-8”>
	<meta name viewport content=”width-device-width, initial-scale-1.0”>
	<title>Perfil de @yield('usuario')</title>
</head>
<body>
	<h1>Nombre: @yield('nombre')</h1>
    @yield ('content', "Gracias por su visita")

</body>
</html>


