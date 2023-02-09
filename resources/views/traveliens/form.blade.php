<x-layouts.app 
		title="Página de formulario" 
		meta-description="Página formulario meta description"
		>
		
	

	<form action="{{route('form.save')}}" method="POST">
		@csrf
		<label>
			Crear cuenta <br>
			<input name="name" type="text">
		</label><br>
		<label>
			Email <br>
			<textarea name="email"></textarea>
		</label><br>
		<label>
			Contraseña <br>
			<input name="password" type="text">
		</label><br>
		<button type="submit">Finalizar</button>
		<br>
	</form>
	
</x-layouts.app>