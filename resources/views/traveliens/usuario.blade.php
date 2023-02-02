{{--
@extends('layouts.app')

@section('title', $usuario)

@section('meta-description', 'user meta description')

@section('content')
<h1>Usuario logeado: {{$usuario}}</h1>

</html>
--}}
<x-layouts.app 
		title="{{$usuario}}" 
		meta-description="Página cuenta {{$usuario}} meta description"
		>
		
        Usuario logeado: {{$usuario}}
</x-layouts.app>