<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setDescripcion(string $descripcion){
        $this->descripcion = $descripcion;
    }
    public function getDescripcion(): string {
        return  $this->descripcion;
    }

    public function setPrecio(float $precio){
        $this->precio = $precio;
    }
    public function getPrecio(): float {
        return  $this->precio;
    }

    public function setStock(int $stock){
        $this->stock = $stock;
    }
    public function getStock(): int {
        return  $this->stock;
    }
}
