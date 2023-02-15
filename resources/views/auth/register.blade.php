<x-layouts.app 
		title="Página de registro" 
		meta-description="Página de registro meta description"
		>
		
	Esta es la página de registro de Traveliens
    <form action="{{route('register')}}" method="POST">
		@csrf
		Nombre
		<x-layouts.label
        name="name" 
		type="text"
		value="name"
        >
		
</x-layouts.label>
		Email
		<x-layouts.label
		name="email" 
		type="email"
		value="email"
		>

	</x-layouts.label>
		Contraseña
		<x-layouts.label
		name="password" 
		type="password"
		value="password"
		>

</x-layouts.label>

		Confirmar contraseña
		<x-layouts.label
		name="password_confirmation" 
		type="password"
		value="password_confirmation"
				>

</x-layouts.label>


		<button type="submit">Registrar</button>
		<br>
	</form><br>
    <a href="{{route ('login') }}">Login</a>
</x-layouts.app>
