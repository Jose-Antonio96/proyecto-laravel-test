
    <x-layouts.app 
		title="Página de formulario" 
		meta-description="Página formulario meta description"
		>

<div class="w-full min-h-screen bg-gray-50 flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
<div class="w-full sm:max-w-md p-5 mx-auto">
              <h2 class="mb-12 text-center text-5xl font-extrabold text-[#181818]">Crea tu viaje</h2>

        <form action="{{route('createTravel')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('traveliens.travel-form-fields')
            <div class="mt-6">
                <button class="w-full inline-flex items-center justify-center px-4 py-2 bg-[#f87721] border border-transparent rounded-md font-semibold text-white hover:bg-[#d53046] active:bg-[#d53046] focus:outline-none focus:border-[#d53046] focus:ring focus:ring-[#f87721] disabled:opacity-25 transition uppercase">Crear</button>
              </div>
            
            
           
        </form>
    </div>
</div>

        
</x-layouts.app>