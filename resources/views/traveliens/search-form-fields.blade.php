<label class="flex flex-col">
    Nombre
    <input name="name" type="text" value="{{old('name')}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

<label class="flex flex-col">
    Tiempo de inicio
    <input name="start" type="date" value="{{old('start')}}">
</label><br>

<label class="flex flex-col">
    Tiempo de finalización
    <input name="end" type="date" value="{{old('end')}}">
</label><br>

<label class="flex flex-col">
    Nombre <br>
    <input name="location" type="text" value="{{old('location')}}">

</label><br>
<label class="flex flex-col">
	Etiquetas a buscar
	<input name="tags" type="text" value="{{old('tags')}}">

</label>

