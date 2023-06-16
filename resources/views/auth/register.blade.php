<x-layouts.app 
		title="Página de registro" 
		meta-description="Página de registro meta description"
		>


	<div class="font-mono font-semibold h-screen flex items-center justify-center">
		<form class="-translate-y-10 p-5 bg-slate-100 rounded border-4 border-[#f87721] space-y-12 max-w-lg shrink-0" accept="image/png,image/jpeg,image/pjg" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
			@csrf
		
			<div class="border-b border-[#181818] ml-15 mr-15">
				<h2 class="flex items-center justify-center font-bold leading-7 text-xl text-[#d53046]">Registro de usuario</h2>
				<p class="flex items-center justify-center mt-1 text-sm leading-8 font-semibold text-[#181818]">Introduzca los datos que se le piden.</p>
		
				<div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 ml-20 mr-20 mb-5">
					<div class="col-span-full">
						<label class="flex flex-col">
							Nombre
							<input name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-[#181818] shadow-sm ring-1 ring-inset ring-[#181818] focus:ring-2 focus:ring-inset focus:ring-[#d53046] sm:text-sm sm:leading-8 p-3 md:w-192 lg:w-284" value="{{old('name')}}">
							@error('name')
								<br>
								<small>*{{$message}}</small>
							@enderror
						</label>
					</div>
		
					<div class="col-span-full">
						<label class="flex flex-col">
							Email
							<input name="email" type="email" class="block w-full rounded-md border-0 py-1.5 text-[#181818] shadow-sm ring-1 ring-inset ring-[#181818] placeholder:text-[#181818] focus:ring-2 focus:ring-inset focus:ring-[#d53046] sm:text-sm sm:leading-8 p-3 md:w-192 lg:w-284" value="{{old('email')}}">
							@error('email')
								<br>
								<small>*{{$message}}</small>
							@enderror
						</label>
					</div>
		
					<div class="col-span-full">
						<label>
							Imagen de perfil
							<input type="file" name="image" class="form-control file-input file-input-bordered w-full max-w-xs">
						</label>
					</div>
		
					<div class="col-span-full">
						<label class="flex flex-col">
							Contraseña
							<input name="password" type="password" class="block w-full rounded-md border-0 py-1.5 text-[#181818] shadow-sm ring-1 ring-inset ring-[#181818] placeholder:text-[#181818] focus:ring-2 focus:ring-inset focus:ring-[#d53046] sm:text-sm sm:leading-8 p-3 md:w-192 lg:w-284" value="{{old('password')}}">
							@error('password')
								<br>
								<small>*{{$message}}</small>
							@enderror
						</label>
					</div>
		
					<div class="col-span-full">
						<label class="flex flex-col">
							Confirmar contraseña
							<input name="password_confirmation" type="password" class="block w-full rounded-md border-0 py-1.5 text-[#181818] shadow-sm ring-1 ring-inset ring-[#181818] placeholder:text-[#181818] focus:ring-2 focus:ring-inset focus:ring-[#d53046] sm:text-sm sm:leading-8 p-3 md:w-192 lg:w-284" value="{{old('password_confirmation')}}">
							@error('confirmed')
								<br>
								<small>*{{$message}}</small>
							@enderror
						</label>
					</div>
				</div>
			</div>
		
			<div class="mt-4 flex items-center justify-center gap-x-6">
				<button type="submit" class="font-yusei btn rounded-md bg-[#d53046] px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#d53046]">Completar registro</button>
			</div>
		
		</form>
	</div>
	
		
</x-layouts.app>
