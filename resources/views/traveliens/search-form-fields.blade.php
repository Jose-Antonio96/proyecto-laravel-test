<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name', $user->name)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name', $user->name)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name', $user->name)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name', $user->name)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

<label>
    Nombre <br>
    <input name="name" type="text" value="{{old('name', $user->name)}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

<div>Nombre de un destino o evento</div>
        <label class="flex flex-col"> 
		<x-layouts.loginlabels
		name="name" 
		type="text"
		value="name"
		>
</x-layouts.loginlabels>
</label> <br>
		{{--}}
		@error('start')
				<br>
				<small>*{{$message}}</small>
			@enderror
				<div>Tiempo de inicio</div>
				<label class="flex flex-col"> 
				<x-layouts.loginlabels
				name="start" 
				type="date"
				value="start"
				>
		</x-layouts.loginlabels>
	</label> <br>

		@error('end')
				<br>
				<small>*{{$message}}</small>
			@enderror
				<div>Tiempo de finalización</div>
				<label class="flex flex-col"> 
				<x-layouts.loginlabels
				name="end" 
				type="date"
				value="end"
				>
		</x-layouts.loginlabels>
	</label> <br>
		@error('location')
				<br>
				<small>*{{$message}}</small>
			@enderror
				<div>Localización</div>
				<label class="flex flex-col"> 
				<x-layouts.loginlabels
				name="location" 
				type="text"
				value="name"
				>
		</x-layouts.loginlabels>
	</label> <br>
		@error('tags')
				<br>
				<small>*{{$message}}</small>
			@enderror
				<div>Etiquetas a buscar</div>
				<label class="flex flex-col"> 
				<x-layouts.loginlabels
				name="tags" 
				type="text"
				value="tags"
				>
		</x-layouts.loginlabels>
	</label><br> 
	--}}