
    <x-layouts.app 
		title="Página de formulario" 
		meta-description="Página formulario meta description"
		>

        <form action="{{route('travel.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('traveliens.travel-form-fields')
            <button type="submit">Crear</button>
            <br>
            
            
           
        </form>
	
</x-layouts.app>