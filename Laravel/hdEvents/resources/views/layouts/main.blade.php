<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- fonte do google -->
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
 <!-- css do bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <!-- css da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse space-beetwen d-flex justify-content-between px-2" id="navbar">
            <a href="" class="navbar-brand">
                <img id="logo"src="/img/hdcevents_logo.svg" alt="">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Criar Evento</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
            </div>
        </nav>


    </header>
    @yield('content')
    <footer>
        <h1>footer maneiro legal</h1>
    </footer>
</body>
<script src="/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>