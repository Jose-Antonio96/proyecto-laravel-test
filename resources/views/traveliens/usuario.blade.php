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
		
        <h1>Usuario logeado: {{$usuario}}</h1>
</x-layouts.app>