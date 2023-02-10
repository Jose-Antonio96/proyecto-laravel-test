<x-layouts.app 
		title="Página de formulario" 
		meta-description="Página formulario meta description"
		>
		{{--
	@foreach($errors->all() as $error)
		<p>{{$error}}</p>
	@endforeach
	Esto no recomendado
--}}
	


	<form action="{{route('form.save')}}" method="POST">
		@csrf
		<label>
			Nombre <br>
			<input name="name" type="text" value="{{old('name')}}">
			@error('name')
				<br>
				<small>*{{$message}}</small>
			@enderror
		
		</label><br>
		
		<label>
			Email <br>
			<input name="email" type="text" value="{{old('email')}}"></input>
			@error('email')
				<br>
				<small>*{{$message}}</small>
			@enderror
		</label><br>


		<label>
			Contraseña <br>
			<input name="password" type="password" value="{{old('jpassword')}}">
			@error('password')
				<br>
				<small>*{{$message}}</small>
			@enderror
		</label><br>
		<button type="submit">Finalizar</button>
		<br>
	</form>
	
</x-layouts.app>