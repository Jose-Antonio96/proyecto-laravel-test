<x-layouts.app 
		title="Página de viaje" 
		meta-description="Página viaje meta description"
		>
		
		<div class="grid grid-cols-3 m-6 card lg:card-side bg-gradient-to-r from-[#8ef8ff] to-[#1b9df0] border-4 border-[#181818] shadow-xl p-4">
			<div class="m-4 p-4 uppercase text-4xl font-bold text-[#d53046] ">{{$travel->name}}</div>

			<div class="m-4 uppercase text-2xl font-bold text-white">{{$travel->location}}</div>

			<div class="rounded bg-gradient-to-r from-[#d53046] to-[#f87721] text-white align-middle p-2 font-semibold outline-double">{{$travel->description}}</div>

			<div class="m-4 text-[#d53046] text-2xl">{{$travel->organizer}}</div>

			<div class="m-4">@if($travel->professional)
					<p class="font-extrabold">Viaje certificado</p>
				@endif
			</div>

			<div class="m-8 font-medium text-2xl text-white italic flex justify-center rounded row-span-2 ">

				<div class="m-8 text-center text-[#181818]">Desde: <br>{{$travel->starts}}</div>
			
				<div class="m-8 text-center text-[#181818]">Hasta: <br>{{$travel->finishes}}</div>
			</div>
				

			<div class="flex justify-center row-start-3 row-end-3 col-start-2">
			<a class="w-72 btn btn-lg border-4 border-[#181818] bg-[#f87721] hover:bg-[#1b9df0] text-[#181818] text-center font-bold py-3 px-10 rounded-full m-10" href="#">Apuntarse</a>
				</div>
		</div>
		
		
</x-layouts.app>