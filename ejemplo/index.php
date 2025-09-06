<h1>Bienvenido a mi Web</h1>

<?php
require_once './controlador/UsuarioController.php';

$controlador = new UsuarioController;

// $controlador->mostrarTodos();

// $controlador->crear();

$nombre_controlador = $_GET['controlador'];



if(isset($nombre_controlador) && class_exists($nombre_controlador)){

    $nombre_controlador=$_GET['controlador'];
    $controlador=new $nombre_controlador;


if(isset($_GET['action'] ) && method_exists($controlador, $_GET['action'])){
    $action = $_GET['action'];
    $controlador->$action();
}else{
    echo "La pagina que buscas no existe";
}
}else{
    echo "La pagina que buscas no existe";
}














?>
