<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/styles.css">
        <script src="./js/script.js"></script>
        <title>@yield('title')</title>
    </head>
    <body>
     @yield('content')   
     <footer>
        <p>GERE UM COM &copy; 2024 </p>
     </footer>
    </body>
</html>
