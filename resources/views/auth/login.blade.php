<x-layouts.app 
		title="Página de login" 
		meta-description="Página de login meta description"
		>
		
	Esta es la página de login de Traveliens

    <form action="{{route('login')}}" method="POST">
		@csrf
		@error('email')
        <br>
        <small>*{{$message}}</small>
    @enderror
		<div>Email</div>
        <label class="flex flex-col"> 
		<x-layouts.loginlabels
		name="email" 
		type="email"
		value="email"
		>
</x-layouts.loginlabels>
</label> 

        <div>Contraseña</div>
        <label class="flex flex-col"> 
		<x-layouts.loginlabels
		name="password" 
		type="password"
		value="password"
		>
</x-layouts.loginlabels>
</label>
        <label class="flex items-center"> 
			<input 
			class="rounded-md"
			name="password_confirmation" 
			type="checkbox"
			>
		
     <br>
</label>
        <div>Recuérdame</div><br>
		
		<button type="submit">Entrar</button>
		<br>
	</form><br>
    <a href="{{route ('register') }}">Registrarse</a>
</x-layouts.app>
