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
		<div>
			Rellene los campos que necesite
		</div>
    <form action="{{route('searchpage.result')}}" method="GET" role="search">
		@csrf
		@include('traveliens.form-fields')
		
		<button type="submit">Iniciar búsqueda</button>
		<br>
	</form><br>
</x-layouts.app>



	