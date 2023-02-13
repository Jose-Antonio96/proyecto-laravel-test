<x-layouts.app 
		title="{{$user->name}}" 
		meta-description="Página de {{$user->name}} meta description"
		>
		
    <ul>
		<li>{{$user->name}}</li>
		<li>{{$user->email}}</li>
	</ul>

		<h2 class="text-3xl font-bold dark:text-white"><a href="{{route ('account') }}">Regresar</a></h2>
</x-layouts.app>

