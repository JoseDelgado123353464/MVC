<?php
require_once 'C:\xampp\htdocs\MVC\config\database.php';

class Usuario {


Public $nombre;
Public $id;
Public $apellidos;
Public $email;
Public $password;

private $db;

public function __construct(){
    $this->db=database::conectar();
}

function getid(){
    return $this->id;
}
function getnombre(){
    return $this->nombre;
}

function getapellidos(){
    return $this->apellidos;
}

function getemail(){
    return $this->email;
}

function getpassword(){
    return $this->password;
}


function setIdusuario($id){
    $this->id=$id;
}
function setnombre($nombre){
    $this->nombre=$nombre;
}

function setapellidos($apellidos){
    $this->apellidos=$apellidos;
}

function setemail($email){
    $this->email=$email;
}

function setpassword($password){
    $this->password=$password;

// metodo que consulte la bd
  
}

  public function conseguirTodos(){
        echo "imprimiendo todos los usuarios...";
        // var_dump($this->db);
        $query = $this->db->query("SELECT * FROM t_usuario");
        return $query;
    }
 public function crear(){
       require_once 'vista/usuarios/crear.php';
      'MVC\ejemplo\controlador\UsuarioController.php';
       $sql="INSERT INTO t_usuario (id_usuario,nombre,apellido,correo,password,id_rol) VALUES({$this->id},'{$this->nombre}','{$this->apellidos}','{$this->email}','{$this->password}',1);";
   

    $guardar = $this->db->query($sql);
    return $guardar;
} 
}