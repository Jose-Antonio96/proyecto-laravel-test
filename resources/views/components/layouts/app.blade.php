<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveliens - {{$title ?? '404'}}</title>
    <meta name="description" content="{{$metaDescription ?? 'Default meta description'}}"/>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col mb-0">
    <main class="flex-1 m-0">
        {{--@include('partials.navigation')--}}
        <x-layouts.header/>      
        {{$slot}}
    </main>
    <footer class="h-10 mb-0">
        <h1 class="text-3xl font-extrabold dark:text-white"/>
        <x-layouts.footer/>
    </footer>
</body>
</html>

