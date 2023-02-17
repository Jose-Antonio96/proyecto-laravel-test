<x-layouts.app 
		title="Página de login" 
		meta-description="Página de login meta description"
		>
		
	Esta es la página de login de Traveliens

	@if(session('status'))
		<div class="status">
			{{session('status')}} <br>
		</div>
		@endif
		
    <form action="{{route('login')}}" method="POST">
		@csrf
		
		<div>Email</div>
        <label class="flex flex-col"> 
			<input name="email" type="email" value="{{old("email")}}">
			@error('email')
			<br>
			<small>*{{$message}}</small>
		@enderror

</label> <br>

        <div>Contraseña</div>
		<label class="flex flex-col"> 
			<input name="password" type="password" value="{{old("password")}}">
			@error('password')
			<br>
			<small>*{{$message}}</small>
		@enderror

</label><br>
		<label class="flex items-center">
			<input name="remember" type="checkbox">
			
        <span class="cursor-pointer">Recuérdame</span>
		
</label><br>
	<button type="submit">Entrar</button>

	</form><br>
    <a href="{{route ('register') }}">Registrarse</a>
</x-layouts.app>
