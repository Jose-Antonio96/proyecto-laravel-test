<x-layouts.app 
		title="Página de viaje" 
		meta-description="Página viaje meta description"
		>
				

<div class="flex-wrap ml-10 mr-10 p-10 mt-2 mb-5">
<div class="card bg-[#d53046] shadow-xl">
  <figure><img class="h-96 object-cover w-full" src="{{ asset('images/' . $travel->image) }}" alt="Album"/></figure>
  <div class="card-body grid grid-cols-2 bg-[#d53046]">
    <h2 class="card-title text-white flex justify-center">{{$travel->name}}</h2>
    <p  class="text-white flex justify-center">{{$user->name}}</p>
    <p class="text-white flex justify-center">{{$travel->location}}</p>
    <p class="text-white flex justify-center">{{$travel->description}}</p>
    <p class="text-white flex justify-center mt-2">{{$travel->starts}}</p>
				<p class="text-white flex justify-center mt-2">{{$travel->finishes}}</p>
    
  </div>
  <div class="card-actions justify-center m-6 ">
	<form class="btn btn-primary text-xl bg-[#181818] hover:bg-[#f87721] w-48"
	action="{{route('JoinTravelForm')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="travel_id" value="{{ $travel->id }}">
	<input type="hidden" name="user_id" value="{{ $travel->user_id }}">
		<button type="submit">Apuntarse</button>
				<br>	
				</form>	
				</div>
			</div>
		<div>
	</div>
</div>
			
		
</x-layouts.app>