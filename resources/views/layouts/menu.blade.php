<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaPHP</title>
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
</head>
<body>
            <nav class="teal darken-4">
                <div class="nav-wrapper">
                <a href="#" class="brand-logo">La Tienda </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Productos</a></li>
                    <li><a href="collapsible.html">Pedidos</a></li>
                </ul>
                </div>
            </nav>

            <div class="container">
                @yield('contenido')
            </div>

            <script src="{{ asset('materialize/js/materialize.js') }}">

            </script>
</body>
</html>