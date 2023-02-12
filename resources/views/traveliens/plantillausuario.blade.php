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
			<li><a href="{{route ('dbuser', $user->id) }}">
				{{$user->name}}</a></li>
			
		@endforeach
		</ul>
		{{$users->links()}}
		<div class="flex baseline">
			<a href="{{route ('account.update') }}">Actualizar datos</a>
		</div>
	</x-layouts.app>