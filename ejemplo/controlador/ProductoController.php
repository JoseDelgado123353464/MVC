<?php

// mostramos las acciones puede hacer el controlador
class ProductoController{
    public function mostrarTodos(){
       
            require_once 'modelo/productoModel.php';

            $producto =new Producto();

            $todosLosProductos = $producto->conseguirTodos();


            require_once 'vista/productos/mostrar-todos.php';

  }
    public function crear(){
        require_once 'vista/productos/crear.php';
    }








  
}

?>