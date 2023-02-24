<x-layouts.app 
		title="Página de viaje" 
		meta-description="Página viaje meta description"
		>
		
		<div class="grid grid-cols-3 m-6">
			<div>{{$travel->name}}</div>

			<div>{{$travel->location}}</div>

			<div class="border-2 border-[#f87721] bg-[#181818] text-white">{{$travel->description}}</div>

			<div>{{$travel->organizer}}</div>

			<div>{{$travel->professional}}</div>

			<div>{{$travel->starts}}</div>
			
			<div>{{$travel->finishes}}</div>	

			
			<a class="w-72 btn btn-lg border-4 border-[#181818] bg-[#f87721] hover:bg-[#1b9df0] text-[#181818] text-center font-bold py-3 px-10 rounded-full m-10" href="#">Apuntarse</a>
		</div>
		
		
</x-layouts.app>