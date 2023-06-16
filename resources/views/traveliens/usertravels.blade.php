<x-layouts.app 
		title="Viajes del usuario {{ Auth::user()->name }}" 
		meta-description="Viajes meta description"
		>
		<div class="font-mono w-full h-full m-10 mb-60 flex justify-between bg-[#181818] text-[#f87721] card mx-auto max-w-screen-lg">
			<div class="grid grid-cols-x m-6">
				<p class="font-yusei font-extrabold mb-10 text-2xl flex justify-around">Viajes en los que te has apuntado</p>
				@foreach ($joined_travels as $joined_travel)
					<p class="m-4 mb-8">{{ $joined_travel->name }}</p>
				@endforeach
			</div>
			<div class="grid grid-cols-x m-6">
				<p class="font-yusei font-extrabold mb-10 text-2xl flex justify-around">Viajes que has creado</p>
				@foreach ($created_travels as $created_travel)
					<p class="m-4 mb-8">{{ $created_travel->name }}</p>
				@endforeach
			</div>                       
		</div>
		
		

</x-layouts.app>