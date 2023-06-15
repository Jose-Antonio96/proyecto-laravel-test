<x-layouts.app 
		title="Actualizar cuenta" 
		meta-description="Página actualización meta description"
		>
		<div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center mb-12 pt-6 sm:pt-0">
			<h2 class="mb-12 text-center text-5xl font-extrabold text-[#d53046]">Editar</h2>
        
		<form class="w-full sm:max-w-md p-5 mx-auto" action="{{route('account.edit', $user)}}" method="POST">

			@csrf @method('PATCH')
			@include('traveliens.form-fields')
			<div class="flex items-center justify-center">
				<button class="bg-[#f87721] hover:bg-[#d53046] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
				  Cambiar datos
				</button>
			  </div>
		</form>
	</div>
		
		
		

</x-layouts.app>
