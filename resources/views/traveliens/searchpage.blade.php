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
		@if(session('status'))
		<div class="status">
			{{session('status')}} <br>
		</div>

		@endif
    
	<form action="{{route('searchpage.result')}}" method="GET">
		@include('traveliens.search-form-fields')
			<button type="submit">Iniciar búsqueda</button>
			<br>
		</form><br>
	<ul>
		@if(isset($travel))
			@foreach ($travel as $trav)
		<li>
			<form action="{{route('travel')}}" method="GET">
				<input type="hidden" name="travel" value="{{$trav->id}}">
				<input type="submit" value="{{$trav->name}}">
			</form>
			</li>
			
				
			@endforeach
		@endif
	</ul>

	
	
</x-layouts.app>



	