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
	

<div class="grid grid-cols-3 ">
	<img src="images/logo.png"/>
	<figure class="h-96 mr-6 col-span-2 m-4">
	<img class="w-full h-96 object-cover object-bottom bg-center" src="images/traveliens3.png" alt="Moodboard"/>
	<figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400"></figcaption>
	</figure>
</div>
		
		
<div class="m-2 flex justify-items-center md grid grid-cols-1 md:grid-cols-2  lg:grid-cols-3">
			
		@foreach ($travels as $travel)

		<a href="{{ route('travel', $travel->id) }}" class="group relative block bg-black m-3">
		
			<input type="hidden" name="travel" value="{{$travel->id}}">
			
			<img
		  alt="Anthrax_Stage"
		  src="images/Anthrax_image.jpg"
		  class="relative inset-0 h-full w-full object-cover opacity-75 transition-opacity group-hover:opacity-50"
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