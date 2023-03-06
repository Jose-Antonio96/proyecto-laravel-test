<x-layouts.app 
		title="Página de registro" 
		meta-description="Página de registro meta description"
		>
		
	Esta es la página de registro de Traveliens

	

    <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
		@csrf

		<label class="flex flex-col">
		Nombre
		<input name="name" type="text" value="{{old('name')}}">
    @error('name')
        <br>
        <small>*{{$message}}</small>
    @enderror

</label><br>

		<label class="flex flex-col">
		Email
		<input name="email" type="email" value="{{old('email')}}">
	@error('email')
		<br>
		<small>*{{$message}}</small>
	@enderror

</label><br>

		<label>
		Imagen de perfil
	<input type="file" class="form-control file-input file-input-bordered w-full max-w-xs" name="image" />
</label><br>

{{--}}
</label><br>
		<label class="flex flex-col">
			Número de teléfono
			<input name="phone_number" type="tel" placeholder="123-45-67-89" 
		 value="{{old('phone_number')}}">
			@error('phone_number')
			<br>
			<small>*{{$message}}</small>
		@enderror
</label><br>
--}}
		<label class="flex flex-col">
		Contraseña
		<input name="password" type="password" value="{{old('password')}}">
	@error('password')
		<br>
		<small>*{{$message}}</small>
	@enderror

</label><br>
		<label class="flex flex-col">
		Confirmar contraseña
		<input name="password_confirmation" type="password" value="{{old('password_confirmation')}}">
	@error('confirmed')
		<br>
		<small>*{{$message}}</small>
	@enderror

</label><br>
		<button type="submit">Registrar</button>
		<br>
	</form><br>
    <a href="{{route ('login') }}">Login</a>
	
</x-layouts.app>
