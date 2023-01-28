<x-layouts.app 
		title="{{$usuario}}" 
		meta-description="Página de {{$usuario}} meta description"
		>
		
        <ul>
		{{$usuario}}
	</ul>

		<h2><a href="{{route ('searchpage') }}">Regresar</a></h2>
</x-layouts.app>

