<!DOCTYPE html>
<html lang=”es”>

	@extends('home')
	
<head>
	<meta charset=”UTF-8”>
	<meta name viewport content=”width-device-width, initial-scale-1.0”>
	<title>Usuario </title>
</head>
<body>
	<ul>
	<li><h1>Usuario @yield('name') </h1></li>
	<li><h2>ID @yield('id')</h2></li>
	<li><h2>Email @yield('email')</h2></li>
		</ul>
	<a href="{{route('traveliens.home')}}">Regresar</a>
</body>
</html>
