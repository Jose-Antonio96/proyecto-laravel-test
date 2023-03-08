<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name')}}">
    @error('name')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    <label>
    Localización <br>
    <input name="location" type="text" value="{{old('email')}}">
    @error('location')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>

    <label>
    Descripción <br>
    <input name="description" type="textarea" value="{{old('description')}}">
    @error('description')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>

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
    
    Marca la casilla si quieres que sea esponsorizado. <br>
    <input name="sponsored" type="checkbox">
    </label><br>
    
    <label>
    
    Marca la casilla si es un viaje profesional.<br>
    <input name="professional" type="checkbox">
    </label><br>
    
    <label>
    Precio por cliente <br>
    <input name="price" type="number" max="100" min="0" value="{{old('description')}}">
    @error('price')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    