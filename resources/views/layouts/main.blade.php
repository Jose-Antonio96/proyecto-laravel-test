<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('Title')</title>
</head>
<body>
    @include('layouts.head')
    
    <br><br>
    @section('topbar')
        < Master topbar >
    @show
    <br><br>
    

    <div class=container>
        @yield('Content')
    </div>
    <br>
    @include('layouts.footer')
</body>
</html>