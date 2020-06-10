<html>
    <head>
        <title>Lista de productos</title>
    </head>
    <body>
        <ul>
            @foreach($productos as $producto)
                <li>Nombre: {{ $producto->getNombre() }} | Descripcion: {{ $producto->getDescripcion() }} | Precio: ${{ $producto->getPrecio() }} | Stock: {{ $producto->getStock() }}</li>
            @endforeach
        </ul>
    </body>
</html>
