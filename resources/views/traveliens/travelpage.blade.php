<x-layouts.app 
		title="Página de viaje" 
		meta-description="Página viaje meta description"
		>
		
		<div class="grid grid-cols-3 m-6 card lg:card-side bg-base-300 shadow-xl">
			<div class="m-4 p-4 uppercase text-4xl font-black">{{$travel->name}}</div>

			<div class="m-4 uppercase text-2xl font-black">{{$travel->location}}</div>

			<div class="border-2 border-[#f87721] bg-[#181818] text-white">{{$travel->description}}</div>

			<div class="m-4">{{$travel->organizer}}</div>

			<div class="m-4">{{$travel->professional}}</div>

			<div class="m-4">{{$travel->starts}}</div>
			
			<div class="m-4">{{$travel->finishes}}</div>	

			
			<a class="w-72 btn btn-lg border-4 border-[#181818] bg-[#f87721] hover:bg-[#1b9df0] text-[#181818] text-center font-bold py-3 px-10 rounded-full m-10" href="#">Apuntarse</a>
		</div>
		
		
</x-layouts.app>