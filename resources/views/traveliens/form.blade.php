<x-layouts.app 
		title="Página de formulario" 
		meta-description="Página formulario meta description"
		>
		{{--
	@foreach($errors->all() as $error)
		<p>{{$error}}</p>
	@endforeach
	Esto no recomendado
--}}
	


	<form action="{{route('form.save')}}" method="POST">
		@csrf
		@include('traveliens.form-fields')
		<button type="submit">Finalizar</button>
		<br>
	</form>
	
</x-layouts.app>