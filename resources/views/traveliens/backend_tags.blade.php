<x-layouts.app 
		title="Página de backend tags" 
		meta-description="Página backend tags meta description"
		>
		
	
		<form class="w-full sm:max-w-md m-4 p-5 mx-auto" action="{{route('backend.edit', $tag)}}" method="POST">
			@csrf @method('PATCH')
			<div class="mb-4">
				Nombre:
				<input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-[#181818] mb-3 leading-tight focus:outline-none focus:shadow-outline" name="tags" type="text" value="{{old('tags', $tag->tags)}}">
				@error('tags')
					<br>
					<small>*{{$message}}</small>
				@enderror
			</div>
			<div class="flex items-center justify-center">
				<button class="font-yusei bg-[#f87721] hover:bg-[#181818] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
				  Cambiar
				</button>
		  
			  </div>
		</form>

		
		<div class="">
			<form action="{{ route('backend.delete', $tag) }}" method="POST">
			  @csrf
			  @method('DELETE')
			  <button class="font-yusei btn m-10 bg-[#181818] text-[#f87721]" type="submit">Eliminar etiqueta</button>
			</form>
		  </div>
		  
		
</x-layouts.app>