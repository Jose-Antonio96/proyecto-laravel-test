{{--
@extends('layouts.app')

@section('meta-description', 'No user meta description')

@section('content')

<h1>Esta es la página de cuenta de Traveliens</h1>

@endsection
--}}

<x-layouts.app 
		title="Cuenta" 
		meta-description="Cuenta meta description"
		>
		@if(session('status'))
		<div class="status">
			{{session('status')}} <br>
		</div>
		@endif
		
		
		<ul>
			@foreach($users as $user)
				<div class="text-3xl">
					<a href="{{route ('dbuser', $user) }}">
						<li>{{$user->name}}</a></li>
						<li>{{$user->email}}</a></li>
						
					<a href="{{route ('account.update', $user) }}">Actualizar datos</a> &nbsp; {{--Esto añade un espacio en blanco--}}
					<img src="{{ asset('images/' . $user->image) }}" />
					
					<form action="{{route ('account.delete', $user) }}" method="POST">
						@csrf 
						@method('DELETE')
						<button type="submit">Eliminar cuenta</button>
					</form><br>
				</div>
		</ul>
		@endforeach
	
	
		
	</x-layouts.app>