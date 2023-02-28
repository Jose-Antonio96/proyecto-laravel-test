<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name', $travel->name)}}">
    @error('name')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    <label>
    Localización <br>
    <input name="location" type="text" value="{{old('email', $travel->location)}}">
    @error('location')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    <label>
    Descripción <br>
    <input name="description" type="textarea" value="{{old('description', $travel->description)}}">
    @error('description')
    <br>
    <small>*{{$message}}</small>
    @enderror
    <label>
    
    Marca la casilla si quieres que sea esponsorizado. <br>
    <input name="sponsor" type="checkbox">
    </label><br>
    
    <label>
    
    Marca la casilla si es un viaje profesional.<br>
    <input name="professional" type="checkbox">
    </label><br>
    
    <label>
    Precio por cliente <br>
    <input name="description" type="number" value="{{old('description', $travel->description)}}">
    @error('description')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    