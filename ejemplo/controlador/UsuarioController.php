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
        require_once 'modelo/modelsUsuario.php';
        $practicanteDeBodega = new Usuario();
        
        $practicanteDeBodega->setIdusuario('null');
        $practicanteDeBodega->setNombre('Juan Sebastian');
        $practicanteDeBodega->setapellidos('Nieto');
        $practicanteDeBodega->Setemail('jajaja@gmail.com');
        $practicanteDeBodega->Setpassword('jajaja@gmail.com');

     
        $guardar=$practicanteDeBodega->crear();


        require_once 'vista/usuarios/crear.php';
    }
}

?>