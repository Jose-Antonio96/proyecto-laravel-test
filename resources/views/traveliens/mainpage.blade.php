{{--@extends('layouts.app')

@section('title', 'Página principal')

@section('content')


<h1>Esta es la página de inicio de Traveliens</h1>

@endsection
--}}

{{--}}
@component('components.layout')
Esto iría dentro del $slot en layout.blade en components
<h1>Esta es la página de inicio de Traveliens</h1>
@endcomponent
--}}

<x-layouts.app 
		title="Página de inicio" 
		meta-description="Página main meta description"
		>
		
	Esta es la página main de Traveliens
	<img src="images/logo.png"/>
</x-layouts.app>