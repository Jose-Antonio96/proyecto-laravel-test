<!DOCTYPE html>
<html lang=”es”>
<head>
	<meta charset=”UTF-8”>
	<meta name viewport content=”width-device-width, initial-scale-1.0”>
	<title>Traveliens - {{$title ?? '404'}}</title>
	<meta name="description" content="{{$metaDescription ?? 'Default meta description'}}"/>

</head>
<body>
	{{--@include('partials.navigation')--}}
        
<x-layouts.navigation />



{{$slot}}
</body>
</html>
