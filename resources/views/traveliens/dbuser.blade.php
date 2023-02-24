<x-layouts.app 
		title="{{$user->name}}" 
		meta-description="Página de {{$user->name}} meta description"
		>
		
    <ul>
		<li>{{$user->name}}</li>
		<li>{{$user->email}}</li>
	</ul>
	<a href="{{route ('account.update', $user) }}">Actualizar datos</a> &nbsp; {{--Esto añade un espacio en blanco--}}
					<img src="{{ asset('images/' . $user->image) }}" />
					
					<form action="{{route ('account.delete', $user) }}" method="POST">
						@csrf 
						@method('DELETE')
						<button type="submit">Eliminar cuenta</button>
					</form><br>

		<h2 class="text-3xl font-bold dark:text-white"><a href="{{route ('account') }}">Regresar</a></h2>
</x-layouts.app>

