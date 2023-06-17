<div class="font-mono font-semibold">
    <div class="mb-4">
        <label class="block mb-1">Título</label>
        <input class="py-2 px-3 border border-gray-300 focus:border-[#181818] focus:outline-none focus:ring focus:ring-[#f87721] focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" name="name" type="text" value="{{old('name')}}" required>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        @enderror
        
    </div>

    <div class="mb-4">
        <label class="block mb-1">Localización</label>
        <input class="py-2 px-3 border border-gray-300 focus:border-[#181818] focus:outline-none focus:ring focus:ring-[#f87721] focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" name="location" type="text" value="{{old('location')}}" required>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        @enderror
        
    </div>

    <div class="mb-4">
        <label class="block mb-1">Descripción</label>
        <input class="py-2 px-3 border border-gray-300 focus:border-[#181818] focus:outline-none focus:ring focus:ring-[#f87721] focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" name="description" type="textarea" value="{{old('description')}}" required>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        @enderror
        
    </div>

    <div class="mb-4">
        <label class="block mb-1">Fecha de comienzo</label>
        <input class="py-2 px-3 border border-gray-300 focus:border-[#181818] focus:outline-none focus:ring focus:ring-[#f87721] focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" name="starts" type="date" value="{{old('starts')}}" required>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        @enderror
        
    </div>

    <div class="mb-4">
        <label class="block mb-1">Fecha de finalización</label>
        <input class="py-2 px-3 border border-gray-300 focus:border-[#181818] focus:outline-none focus:ring focus:ring-[#f87721] focus:ring-opacity-50 rounded-md shadow-sm disabled:bg-gray-100 mt-1 block w-full" name="finishes" type="date" value="{{old('finishes')}}" required>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        @enderror
        
    </div>

    <div class="col-span-full">
        <label><br>
            Imagen representando al viaje
            <input type="file" name="image" class="form-control file-input file-input-bordered w-full max-w-xs" required>
        </label>
    </div>

    
    </div>

    <div class="mt-6">
        <label class="block mb-1">Elige etiquetas</label>
        <div class="mb-4 grid grid-cols-4">
            @foreach($tags as $id => $tagName)
                <ol class="flex place-self-center">
                    <input type="checkbox" class="checkbox m-4" id="{{ $id }}" name="tags[]" value="{{ $id }}">
                    <label class="translate-y-4" for="{{ $id }}">{{ $tagName }}</label>
                </ol>
            @endforeach
        </div>
    </div>
             

      
          


