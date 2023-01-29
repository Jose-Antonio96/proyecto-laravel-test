<!DOCTYPE html>
<html lang=”es”>
<head>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<meta charset=”UTF-8”>
	<meta name viewport content=”width-device-width, initial-scale-1.0”>
	<title>Traveliens - {{$title ?? '404'}}</title>
	<meta name="description" content="{{$metaDescription ?? 'Default meta description'}}"/>

</head>
<body>
	{{--@include('partials.navigation')--}}
	
<x-layouts.header/>      
<x-layouts.navigation />



{{$slot}}
</body>
<footer>	
	<x-layouts.footer/>
</footer>
</html>
