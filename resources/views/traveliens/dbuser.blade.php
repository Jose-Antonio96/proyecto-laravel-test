<x-layouts.app 
		title="{{$usuario->name}}" 
		meta-description="Página de {{$usuario->name}} meta description"
		>
		
    <ul>
		<li>{{$usuario->id}}</li>
		<li>{{$usuario->name}}</li>
		<li>{{$usuario->email}}</li>
	</ul>

		<h2 class="text-3xl font-bold dark:text-white"><a href="{{route ('searchpage') }}">Regresar</a></h2>
</x-layouts.app>

