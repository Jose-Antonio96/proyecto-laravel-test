<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveliens - {{$title ?? '404'}}</title>
    <meta name="description" content="{{$metaDescription ?? 'Default meta description'}}"/>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col m-0">
    <main class="flex-grow">
        {{--@include('partials.navigation')--}}
        <x-layouts.header/>      
        {{$slot}}
    </main>
    <footer class="	">
        <h1 class="text-3xl font-extrabold dark:text-white"/>
        <x-layouts.footer/>
    </footer>
</body>
</html>

