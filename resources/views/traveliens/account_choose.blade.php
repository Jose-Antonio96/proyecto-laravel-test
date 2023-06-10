<x-layouts.app 
		title="Eliga opcion" 
		meta-description="Página edición meta description"
		>
		
        <div class="flex justify-center">
			<div class="place-content-center">
				<p class="text-center text-bold">Escoja el tipo de cuenta que desea<p><br>
		<a class="btn bg-black m-3 text-[#f87721]" href="{{route ('register') }}">Usuario normal</a>

		<a class="btn bg-black m-3 text-[#f87721]" href="{{route ('register_org') }}">Usuario organizador</a><br>

			</div>
		</div>
		<br><a class="btn bg-black m-3 text-[#d53046]" href="{{route ('mainpage') }}">Regresar</a>

</x-layouts.app>
