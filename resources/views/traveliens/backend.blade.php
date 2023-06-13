<x-layouts.app 
		title="Página de backend" 
		meta-description="Página backend meta description"
		>

		@if(session('status'))
			<div class="status m-4 font-bold ">
				{{session('status')}} <br>
			</div>
			@endif

<div class="flex justify-center items-center mt-10 mb-80">
	<div class="dropdown dropdown-hover m-8 mb-32">
		<label tabindex="0" class="btn m-1 bg-[#181818] text-[#f87721]">Ver etiquetas</label>
		<ul class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
			
			
			@foreach ($tags as $tag)
			<li><a href="{{route ('backend.show', $tag) }}">{{$tag->tags}}</a></li>
		
		@endforeach
		</ul>
	  </div>
	  
	  <div class="dropdown dropdown-hover m-8 mb-32">
		<label tabindex="0" class="btn m-1 bg-[#181818] text-[#f87721]">Crear etiqueta</label>
		<div class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-96">
		 <div class="w-full bg-[#183160] flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
			<form class="w-full sm:max-w-md p-5 mx-auto" action="{{ route('backend.create') }}" method="POST">
				@csrf
					<div class="mb-4">
						<label class="block text-white text-sm font-bold mb-2">
					Nombre de tag</label>
					<input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-[#181818] mb-3 leading-tight focus:outline-none focus:shadow-outline" name="tags" type="text" value="{{old('tags')}}" required>
				</div>
					@error('tags')
					<br>
					<small>*{{$message}}</small>
					@enderror
					
					<div class="flex items-center justify-center">
						<button class="bg-[#f87721] hover:bg-[#181818] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
						  Crear
						</button>
			</form>
		 </div>
	  </div>
		</div>
	  </div>	
</div>



	</x-layouts.app>