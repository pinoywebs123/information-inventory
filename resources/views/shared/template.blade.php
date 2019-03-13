<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="{{URL::to('css/bootstrap.min.css')}}" rel="stylesheet">
        <title>Information and Inventory System</title>
        @yield('styles')
        
    </head>
    <body>
       <div class="container">
       	@yield('contents')
       </div>
    </body>
</html>
