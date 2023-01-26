@extends('layouts.app')

@section('title', $usuario)

@section('meta-description', 'user meta description')

@section('content')
<h1>Usuario logeado: {{$usuario}}</h1>

</html>