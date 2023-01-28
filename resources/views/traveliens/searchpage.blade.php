{{--
@extends('layouts.app')

@section('title', 'Página de búsqueda')

@section('meta-description', 'Searchpage meta description')

@section('content')

<h1>Esta es la página de búsqueda de Traveliens</h1>

@endsection

--}}


<x-layouts.app 
		title="Página de búsqueda" 
		meta-description="Página de búsqueda meta description"
		>
		
	<h1>Esta es la Página de búsqueda de Traveliens</h1>
	<br><br>
	<ul>
		@foreach($usuario as $user)
		<li><a href="{{route ('dbuser', $user->name) }}">
			{{$user->name}}</a></li>
		
	@endforeach
	</ul>
	{{$usuario->links()}}
	<br><br>
	
</x-layouts.app>



	