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
		
        Usuario
		
		<ul>
			@foreach($users as $user)
				<div>
					<a href="{{route ('dbuser', $user) }}">
						{{$user->name}}</a></li>
						@auth
					<a href="{{route ('account.update', $user) }}">Actualizar datos</a> &nbsp; {{--Esto añade un espacio en blanco--}}
					<img src="{{ asset('images/' . $user->image) }}" />

					<form action="{{route ('account.delete', $user) }}" method="POST">
						@csrf 
						@method('DELETE')
						<button type="submit">Eliminar cuenta</button>
					</form><br>
					@endauth
				</div>
		</ul>
		@endforeach
		
		{{$users->links()}}
		
	</x-layouts.app>