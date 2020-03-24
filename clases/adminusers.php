<?php
    //include("db.php");
    include("Usuario.php");
    $op=$_POST['op'];
   // echo Usuario::MostrarUsuarios();
    switch ($op) {
        case 'MostrarAcceso':
            echo Usuario::MostrarAccesos();
            break;
        
        case 'MostrarUsuarios':
           echo Usuario::MostrarUsuarios();
            break;
        case 'Alta':
            $email=$_POST["email"];
            $pass=$_POST["contra"];
            return Usuario::Alta($email,$pass);
            break;
        case 'Modificar':
            $email=$_POST["email"];
            $pass=$_POST["contra"];
            return Usuario::Modificar($email,$pass);
            break;
        case 'Eliminar':
            $email=$_POST["email"];
            return Usuario::Eliminar($email);
    }
?>