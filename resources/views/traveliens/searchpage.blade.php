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
	
		@if(session('status'))
		<div class="status m-4 font-bold ">
			{{session('status')}} <br>
		</div>

		

		@endif
    
	<form class="font-yusei" action="{{route('searchpage.result')}}" method="GET">
		@include('traveliens.search-form-fields')
			
		</form><br>

		
	<ul>
		@if(isset($travel))
			@foreach ($travel as $trav)
		<li>
			
			<form action="{{route('travel', $trav->id)}}" method="GET">
				<div class="w-100% mr-8">
					<input type="hidden" name="travel" value="{{$trav->id}}">
<table class="font-mono -translate-y-20 table bg-[#183160] m-4">
<!-- head -->
<thead>
<tr>
<th></th>
<th class="text-white">Fecha de inicio</th>
<th class="text-white"> Fecha fin</th>
<th></th>
</tr>
</thead>
<tbody>



<tr>
<td class=" w-96">
  <div class="ml-10">
      <div class="font-bold text-lg text-white" >{{$trav->name}}</div>
      <div class="text-sm opacity-50 text-white">{{$trav->location}}</div>
    </div>
  </div>
</td>
<td class="text-white">
	{{$trav->starts}}
  <br/>

</td>
<td class="text-white">{{$trav->finishes}}</td>
<th class>
  <img class="object-fill h-48 w-96 ml-10" src="{{ asset('images/' . $trav->image) }}">
</th>

<th>
	<input class="font-yusei lg:w-64 w-32 translate-x-0 btn lg:-translate-x-4 md:translate-x-11" type="submit" value="Detalles">

</th>
</tr>


</table>

</div>
				
				
			</form>
			</li>

			
			
				
			@endforeach
		@endif
	</ul>
	
	
	
</x-layouts.app>



	