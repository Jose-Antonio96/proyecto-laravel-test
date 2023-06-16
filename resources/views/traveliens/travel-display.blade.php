<x-layouts.app 
		title="Viajes" 
		meta-description="Página de viajes meta description"
		>
	{{--
        <p>{{$travels}}</p>
		@foreach ($travels as $travel)
			{{$travel->name}}
		@endforeach
		--}}
		<ul>
			@foreach ($travels as $travel)
				<li>{{ $travel->name }} - {{ $travel->location }}</li>
			@endforeach
		</ul>
		
		
        <h2 class="font-yusei text-3xl font-bold dark:text-white"><a href="{{route ('account') }}">Regresar</a></h2>
</x-layouts.app>
