<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cardinal Asistence System</title>
    <style>
        /* Estilos para el menú de navegación */
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333; /* Fondo del menú */
        }

        li.navitem {
            float: left;
        }

        li.navitem a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li.navitem a:hover {
            background-color: #555; /* Color de fondo al pasar el cursor */
        }
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