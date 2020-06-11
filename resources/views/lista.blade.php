@extends('layouts.app')

@section('body')
@section('title', 'Lista de productos')
        <ul>
            @foreach($productos as $producto)
                <li>Nombre: {{ $producto->getNombre() }} | Descripcion: {{ $producto->getDescripcion() }} | Precio: ${{ $producto->getPrecio() }} | Stock: {{ $producto->getStock() }}</li>
            @endforeach
        </ul>
@endsection

