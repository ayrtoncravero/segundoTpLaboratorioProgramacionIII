<html>
    <head>
        <title>Cargar productos</title>
    </head>
    <body>

        @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/productos" method="POST">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ old('nombre') }}" required max="256">
            <br>
            <label>Descripcion:</label>
            <input type="text" name="descripcion" value="{{ old('descripcion') }}" required min="1">
            <br>
            <label>Precio:</label>
            <input type="number" name="precio" value="{{ old('precio') }}" min="1">
            <br>
            <label>Stock:</label>
            <input type="number" name="stock" value="{{ old('stock') }}" min="0">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
