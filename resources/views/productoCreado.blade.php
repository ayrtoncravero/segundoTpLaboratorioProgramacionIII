@extends('layouts.app')

@section('body')
@section('title', 'Producto creado')

    <p>El producto: {{ $producto->getNombre() }} se creo exitosamente</p>
    <br>
    <p>En "/listaProductos" se puede ver el stock en la DB</p>

@endsection



