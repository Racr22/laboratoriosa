<?php
include("clases/Usuario.php");
$conexion=Acceso::DameUnObjetoAcceso();
$email= $_POST["email"];
$pass=$_POST["contra"];
$obj= new stdClass();

if(Usuario::Login($email,$pass)){
    Usuario::GuardarAccesoCorrecto($email);
    $obj->exito=true;
}else{
    Usuario::GuardarAccesoIncorrecto($email);
    $obj->exito=false;
}
echo json_encode($obj);


?>