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
		type="text"
		value="email"
		>

	</x-layouts.label>
		Password
		<x-layouts.label
		name="password" 
		type="password"
		value="password"
		>

</x-layouts.label>
		<button type="submit">Registrar</button>
		<br>
	</form><br>
    <a href="{{route ('login') }}">Login</a>
</x-layouts.app>
