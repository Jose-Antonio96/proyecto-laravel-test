<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name')}}" required>
    @error('name')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    
    <label>
    Localización <br>
    <input name="location" type="text" value="{{old('location')}}" required>
    @error('location')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>

    <label>
    Descripción <br>
    <input name="description" type="textarea" value="{{old('description')}}" required>
    @error('description')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>

    <label>
        Fecha de comienzo <br>
    <input name="starts" type="date" value="{{old('starts')}}" required>
    @error('starts')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>

    <label>
     Fecha de finalización <br>
    <input name="finishes" type="date" value="{{old('finishes')}}" required>
     @error('finishes')
     <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>

    <div class="col-span-full">
        <label><br>
            Imagen representando al viaje
            <input type="file" name="image" class="form-control file-input file-input-bordered w-full max-w-xs" required>
        </label>
    </div>
{{--
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <span>Seleccione tags que añadir</span>

                    <br>
                    <div class="form-check">
                        <label class="form-check-label" for="check">
                            
                            @foreach ($tags as $tag)
                            <input type="checkbox" class="form-check-input" name="tags"
                                value="{{ in_array($tag, $array) ? 'checked' : '' }}  >
                        @endforeach

                        </label>
                </div>
            </div>
        </div>
    </div><br>

    <label>


    <small>*{{$message}}</small>
    @enderror
    </label><br>
    --}}