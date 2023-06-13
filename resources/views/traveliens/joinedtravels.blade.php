<x-layouts.app 
		title="Página de backend" 
		meta-description="Página backend meta description"
		>
		
		@foreach ($travels as $travel)
    <p>{{ $travel->name }}</p>
@endforeach


</x-layouts.app>