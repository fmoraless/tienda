<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'My Laravel Store')</title>
    </head>
    <body>
        @include('store.partials.nav')
        
        @yield('content')
        
        @include('store.partials.footer')
        
    </body>    
</html>



