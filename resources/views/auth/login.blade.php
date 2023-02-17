<x-layouts.app 
		title="Página de login" 
		meta-description="Página de login meta description"
		>
		
	Esta es la página de login de Traveliens

    <form action="{{route('login')}}" method="POST">
		@csrf
		
		<div>Email</div>
        <label class="flex flex-col"> 
			<input name="email" type="email" value="{{old("email")}}">
			@error('email')
			<br>
			<small>*{{$message}}</small>
		@enderror

</label> 

        <div>Contraseña</div>
		<label class="flex flex-col"> 
			<input name="password" type="password" value="{{old("password")}}">
			@error('password')
			<br>
			<small>*{{$message}}</small>
		@enderror

</label> 
		<label class="flex flex-col"> 
			<input name="password_confirmation" type="checkbox">
			
</label> 
        <div>Recuérdame</div><br>
		
		<button type="submit">Entrar</button>
		<br>
	</form><br>
    <a href="{{route ('register') }}">Registrarse</a>
</x-layouts.app>
