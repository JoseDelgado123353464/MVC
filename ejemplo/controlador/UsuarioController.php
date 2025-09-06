<?php

// mostramos las acciones puede hacer el controlador
class UsuarioController{
    public function mostrarTodos(){
        require_once 'modelo/modelsUsuario.php';
        $usuario= new Usuario();

        $todos_los_usuarios = $usuario -> conseguirTodos();

        require_once 'vista/usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once 'vista/usuarios/crear.php';
    }
}

?>