<!DOCTYPE html>
<html lang=”es”>
<head>
	<meta charset=”UTF-8”>
	<meta name viewport content=”width-device-width, initial-scale-1.0”>
	<title>Titulo</title>
</head>
<body>
	<h1>Usuario {{$usuario}}</h1>
	<br><br>
	<ul>
		@foreach($usuario as $user)
		<li>{{$user->name}}</li>
		<li>{{$user->name}}</li>
	@endforeach
	</ul>
	{{$usuario->links()}}
	<br><br>


</body>
</html>

@yield('traveliens.plantilla')
@yield('title', 'Título de la página')
@yield('sidebar')
    <p>Esto se adhiere al sidebar.</p>

@yield('content')
    <p>Contenido.</p>
