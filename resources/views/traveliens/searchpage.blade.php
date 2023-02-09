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
		
	Búsqueda
	<br><br>
	<a href="">Iniciar búsqueda</a>
	<ul>
		@foreach($travel as $user)
		<li><a href="{{route ('searchpage', $travel->id) }}">
			{{$travel->name}}</a></li>
		
	@endforeach
	</ul>
	{{$usuario->links()}}
	<br><br>
	
</x-layouts.app>



	