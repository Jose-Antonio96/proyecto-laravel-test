<x-layouts.app 
		title="Editar" 
		meta-description="Página edición meta description"
		>
		
        Editar
		<form action="{{route('account.edit', $user)}}" method="POST">

			@csrf @method('PATCH')
			@include('traveliens.form-fields')
			<button type="submit">Finalizar</button>
		</form>

</x-layouts.app>
