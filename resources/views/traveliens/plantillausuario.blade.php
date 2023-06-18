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
		<div class="status m-4 font-bold ">
			{{session('status')}} <br>
		</div>
		@endif
		
		<div class="p-2 mb-20">
			<div class="grid grid-cols-3 m-4">
			<div class="avatar m-2.5 ml-16">
			  <div class="w-40 rounded-xl">
				<img src="{{ asset('images/' . $user->image) }}" /> />
			  </div>
			
			</div>
			  <div>
				<p class="uppercase mt-6 text-center text-2xl">{{$user->name}}</p>
					
				</div>
			
			  <div>
				<p class="uppercase mt-6 text-center text-2xl">{{$user->email}}</p>
				</div>
			
				<div class="rating rating-md mt-4 ml-20 w-60">
			  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
			  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" checked />
			  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
			  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
			  <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" />
			</div>
			
			<div class="col-span-2 bg-[#d53046] rounded p-2 mr-4 translate-x-0 lg:-translate-x-24">
				<p class="font-mono uppercase mt-2 text-center text-white m-1 "> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt quas nesciunt excepturi consequuntur pariatur obcaecati ipsam, veritatis aliquid. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt quas nesciunt excepturi consequuntur pariatur obcaecati ipsam, veritatis aliquid.</p>
				</div>
			</div>
			
			<div class="grid grid-cols-2 lg:grid-cols-3 flex justify-center m-6 mt-20 bg-[#181818] rounded">
			
			  <div class="m-2 p-2 flex justify-center">
				<a class="font-yusei min-w-full  btn btn-primary bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-2 px-4 rounded-full flex justify-center text-center sm:w-64 md:w-64 lg:w-72" href="{{route ('createTravelForm') }}">Crear viajes</a>
				
				</div>
			
			
			  <div class="m-2 p-2 flex justify-center">
				<a class="font-yusei min-w-full  btn btn-primary bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-2 px-4 rounded-full flex justify-center text-center sm:w-64 md:w-64 lg:w-72" href="{{route ('account.update', $user)}}">Actualizar datos</a>
				
				</div>
			
			  <div class="m-2 p-2 flex justify-center">
				<a class="font-yusei min-w-full  btn btn-primary bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-2 px-4 rounded-full flex justify-center text-center sm:w-64 md:w-64 lg:w-72" href="{{route ('userTravels') }}">Mis viajes</a>
			   
				</div>
			{{--
			  <div class="m-2 p-2 flex justify-center">
				<form  action="{{route ('account.delete', $user) }}" method="POST">
					@csrf 
					@method('DELETE')
					<button class="font-yusei min-w-full btn btn-primary bg-[#1b9df0] hover:bg-[#f87721] text-white font-bold py-2 px-4 rounded-full flex justify-center text-center sm:w-64 md:w-64 lg:w-72" type="submit">Eliminar cuenta</button>

				</form><br>
				</div>
				--}}
			  </div>
			</div>
		
				
						{{--
					<br><a href="{{route ('travel.show') }}">Ver viajes del usuario</a>
--}}
					
		
	
	
		
	</x-layouts.app>