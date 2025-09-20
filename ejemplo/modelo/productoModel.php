<?php

class Producto{
    public $nombreProducto;
    public $descripcion;




function getNombreproducto(){
    return $this->nombreProducto;
    
}

function getdescripcion(){
    return $this->descripcion;
    
}

function setNombreproducto($nombreProducto){
    $this->nombreproducto=$nombreProducto;
}

function setdescripcion($descripcion){
    $this->descripcion=$descripcion;
}

public function conseguirTodos(){
    echo "IMPRIMIR TODOS LOS PRODUCTOS";
}
}

?>