<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="/js/jquery-3.1.1.min.js" defer></script>
    <script src="/js/main.js?v=1.2.0" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&family=Slackey&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/main.css?v=1.2.1" rel="stylesheet">
    <link href="/css/responsive.css?v=1.2.1" rel="stylesheet">

</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>¿Quién será?</h1>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Desarrollado por Zynetik Producciones</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
