<x-layouts.app 
		title="Viajes del usuario {{ Auth::user()->name }}" 
		meta-description="Viajes meta description"
		>
		
		@foreach ($travels as $travel)
    <p>{{ $travel->name }}</p>
@endforeach


</x-layouts.app>