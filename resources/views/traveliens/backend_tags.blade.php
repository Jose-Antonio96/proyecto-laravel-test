<x-layouts.app 
		title="Página de backend tags" 
		meta-description="Página backend tags meta description"
		>
		
	
    
		@foreach ($tags as $tag)
			<li>{{$tag->tags}}</li>
		@endforeach
</x-layouts.app>