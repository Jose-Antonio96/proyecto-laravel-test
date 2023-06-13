{{--@extends('layouts.app')

@section('title', 'Página principal')

@section('content')


<h1>Esta es la página de inicio de Traveliens</h1>

@endsection
--}}

{{--}}
@component('components.layout')
Esto iría dentro del $slot en layout.blade en components
<h1>Esta es la página de inicio de Traveliens</h1>
@endcomponent
--}}

<x-layouts.app 
		title="Página de inicio" 
		meta-description="Página main meta description"
		>
		@if(session('status'))
		<div class="status m-4 font-bold ">
			{{session('status')}} <br>
		</div>
		@endif
	
{{-- <div class="bg-cover bg-center mt-10" style="background-image: url('./images/traveliens3.png')"> --}}

	<div class="grid grid-cols-3 bg-white rounded-xl m-4">
		<img class="bg-white rounded-xl m-4" src="images/logo.png"/>
	<div class="grid grid-rows-2">
		<h1 class="bg-white rounded-xl m-4 translate-y-40 flex justify-center font-black text-9xl text-[#d53046]">Bienvenido!</h1>
		<h2 class="text-2xl font-bold ml-5 text-[#f87721] translate-y-20">Todo tipo de viajes a un solo click</h2>
		</div>
	</div>
			
			
	<div class="m-2 flex justify-items-center md grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3">
				
			@foreach ($travels as $travel)

			<a href="{{ route('travel', $travel->id) }}" class="group relative block bg-black m-3">
			
				<input type="hidden" name="travel" value="{{$travel->id}}">
				
				<img
				alt="Imagen de viaje"
				src="{{ asset('images/' . $travel->image) }}"
				class="relative inset-0 w-full h-96 object-cover opacity-75 transition-opacity group-hover:opacity-50"
			/>
			
		
			<div class="absolute inset-0 p-4 sm:p-6 lg:p-8">
			<p class="font-bold uppercase tracking-widest text-white">
				{{ $travel->name }}
			</p>
		
			
		
			<div class="mt-32 sm:mt-48 lg:mt-64">
				<div
				class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
				>
				<p class="text-sm text-white font-medium">
					{{ $travel->description }}
				</p>
				</div>
			</div>
			</div>
			
		</a>
			
		
		@endforeach

		
		
		</div>
</div>  
</x-layouts.app>