<?php


class Usuario {


Public $nombre;
Public $apellidos;
Public $email;
Public $password;


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
    }
 public function crear(){
       require_once 'vista/usuarios/crear.php';
    }


}