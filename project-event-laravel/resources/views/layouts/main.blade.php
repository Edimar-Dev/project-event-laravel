<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fonte -->
        <link href="https://fonts.googleapis.com/css2?family=Oxanium" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- CSS da aplicação-->
        <link rel="stylesheet" href="./css/styles.css">
        <!-- JS da aplicação -->
        <script src="./js/script.js"></script> 
    </head>
    <body>
     <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="./img/logo1.png" alt="LOGO GERE UM COM">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-intem">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-intem">
                        <a href="./events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-intem">
                        <a href="/" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-intem">
                        <a href="/" class="nav-link">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
     </header>   
     @yield('content')   
     <footer>
        <p>GERE UM COM &copy; 2024 </p>
        <p><a href="/termos-de-uso">Termos de Uso</a> | <a href="/politica-de-privacidade">Política de Privacidade</a></p>
     </footer>
    </body>
</html>
