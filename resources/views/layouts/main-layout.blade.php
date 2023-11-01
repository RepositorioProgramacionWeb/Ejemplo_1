<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cardinal Asistence System</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

    </style>
</head>
<body>
    <header>
        <h1>Cardinal Asistence System</h1>
    </header>

    <nav>
        <ul class="navbar">
            <li class="navitem"><a href="#seccion1">Sección 1</a></li>
            <li class="navitem"><a href="#seccion2">Sección 2</a></li>
            <li class="navitem"><a href="#seccion3">Sección 3</a></li>
        </ul>
    </nav>
    @yield('content')
    <footer>
        <p>Derechos de autor &copy; 2023 - Mi Página Web Informativa</p>
    </footer>
</body>
</html>