    

<div class="container flex justify-center mb-40 ml-10 p-2 md:p-0 md:translate-x-20 :translate-x-0">
  
      <div class="border-2 border-[#f87721] m-10 p-6 grid grid-cols-1 gap-6 shadow-lg rounded-lg bg-[#d53046] shrink-0">
          <div class="grid grid-cols-1 gap-4">
              <div class="grid grid-cols-2 gap-2 border p-2 rounded sm:grid-flow-col">
                  <div class="text-white">
                      Nombre
                      <input class="bg-[#183160] rounded flex m-2 content-center" name="name" type="text" value="{{ old('name') }}">
                  </div>
                  <div class="text-white">
                      Localización
                      <input class="bg-[#183160] rounded flex m-2 content-center" name="location" type="text" value="{{ old('location') }}">
                  </div>
                  <div class="text-white">
                      Fecha de inicio
                      <input class="bg-[#183160] rounded flex m-2 content-center" name="starts" type="date" value="{{ old('starts') }}">
                  </div>
                  <div class="text-white">
                      Fecha de fin
                      <input class="bg-[#183160] rounded flex m-2 content-center" name="finishes" type="date" value="{{ old('finishes') }}">
                  </div>
              </div>
              <div class="text-white">
                  Etiquetas
                  <div class="grid grid-cols-7"><br>
                  @foreach($tags as $tag)
                      <ol class="font-mono">
                          <input type="checkbox" id="tag{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                          <label for="tag{{ $tag->id }}">{{ $tag->tags }}</label>
                          <div class="content">
                          </div>
                      </ol>
                  @endforeach
                  </div>
              </div>
          </div>
          <button type="submit" class="text-center btn btn-primary bg-white bg-[#181818] hover:bg-[#f87721] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline shrink-0 border-2 border-[#f87721] uppercase text-2xl" type="button">
              Iniciar búsqueda
          </button>
      </div>
  
</div >





{{--


</label><br>
<label class="flex flex-col">
	Etiquetas a buscar
	<input name="tags" type="text" value="{{old('tags')}}">

</label>
--}}
