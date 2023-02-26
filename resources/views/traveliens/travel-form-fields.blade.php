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
    {{--Esto tiene que ser un checkmark--}}
    ¿Quieres que sea esponsorizado? <br>
    <input name="sponsor" type="text" value="{{old('description', $travel->description)}}">
    @error('sponsor')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    
    
    <label>
    {{--Esto tiene que ser un checkmark--}}
    ¿Viaje de empresa profesional?<br>
    <input name="description" type="text" value="{{old('description', $travel->description)}}">
    @error('description')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    
    
    <label>
    Precio por cliente <br>
    <input name="description" type="number" value="{{old('description', $travel->description)}}">
    @error('description')
    <br>
    <small>*{{$message}}</small>
    @enderror
    </label><br>
    