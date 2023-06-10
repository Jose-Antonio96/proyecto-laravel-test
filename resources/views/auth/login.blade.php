<x-layouts.app 
		title="Página de login" 
		meta-description="Página de login meta description"
		>

	@if(session('status'))
		<div class="status m-4 font-bold ">
			{{session('status')}} <br>
		</div>
		@endif
		
    
		
		
			

<div class="w-full h-full flex justify-center p-20 mr-25 mb-20">
	<form class="bg-[#183160] shadow-md rounded border-2 border-[#d53046] px-8 pt-6 pb-8 mb-4" action="{{route('login')}}" method="POST">
    @csrf
	<div class="mb-4">
      <label class="block text-white text-sm font-bold mb-2">
		Email
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-[#181818] leading-tight focus:outline-none focus:shadow-outline" id="username" name="email" type="email" value="{{old("email")}}">
			@error('email')
			<br>
			<small>*{{$message}}</small>
		@enderror
      </label>
    </div>
    <div class="mb-6">
      <label class="block text-sm font-bold mb-2 text-white">
        Contraseña
		<input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-[#181818] mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" value="{{old("password")}}">
			@error('password')
			<br>
			<small>*{{$message}}</small>
		@enderror
      </label>
    </div>
	<div class="flex items-center justify-between">
	<label class="flex items-center">
		<input name="remember" type="checkbox">
		
	<span class="cursor-pointer text-white">Recuérdame</span>
	</div>
</label><br>
    <div class="">
		<button class="bg-[#181818] hover:bg-[#f87721] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Entrar</button>

      </a>
    </div>
  </form>
  </p>
</div>
</div>
	
</x-layouts.app>
