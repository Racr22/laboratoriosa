<?php
    include("db.php");
    class Usuario{

        public static function Login($email,$pass){
            $obj= new stdClass();
            $conexion= Acceso::DameUnObjetoAcceso();
            $sql="SELECT * FROM usuarios WHERE email=:email AND pass=:pass";
            $db=$conexion->RetornarConsulta($sql);
            $db->bindValue(':email',$email);
            $db->bindValue(':pass',$pass);
            $db->execute();
            if($db->rowCount()>0){
            return true;
            }else{
            return false;
            }
        }

        public static function GuardarAccesoCorrecto($email){
            $conexion= Acceso::DameUnObjetoAcceso();
            $fecha=date('Y-m-d');
            $ip=$_SERVER["REMOTE_ADDR"];
            $correcto="correcto";
            $sql="INSERT INTO accesos (email,fecha,ip,correcto) VALUES(:email,:fecha,:ip,:correcto)";
            $db=$conexion->RetornarConsulta($sql);
            $db->bindValue(':email',$email);
            $db->bindValue(':fecha',$fecha);
            $db->bindValue(':ip',$ip);
            $_SERVER["REMOTE_ADDR"]   $db->bindValue(':correcto',$correcto);
            $db->execute();
        }
        public static function GuardarAccesoIncorrecto($email){
            $conexion= Acceso::DameUnObjetoAcceso();
            $fecha=date('Y-m-d');
            $ip=$_SERVER["REMOTE_ADDR"];
            $correcto="incorrecto";
            $sql="INSERT INTO accesos (email,fecha,ip,correcto) VALUES(:email,:fecha,:ip,:correcto)";
            $db=$conexion->RetornarConsulta($sql);
            $db->bindValue(':email',$email);
            $db->bindValue(':fecha',$fecha);
            $db->bindValue(':ip',$ip);
            $db->bindValue(':correcto',$correcto);
            $db->execute();
        }
        public static function TraerUsuarios(){
            $conexion=Acceso::DameUnObjetoAcceso();
            $sql="SELECT * from usuarios";
            $db=$conexion->RetornarConsulta($sql);
            $db->execute();
            $usuarios=$db->fetchAll();
            return json_encode($usuarios);
        }
        public static function MostrarUsuarios(){
            $lista=Usuario::TraerUsuarios();
            $ObjJson=json_decode($lista);
            if(isset($ObjJson))
            {
            $tabla = " 
            Alta Usuario
            </button>
            </div>
            <table class='table-bordered mt-5' align='center'>
            <tr><td>Email </td><td>Pass </td><td>Controles</td></tr>";
            for($i = 0 ; $i < count($ObjJson) ; $i++)
            {
            $tabla.="<tr>
            <td>".
            $ObjJson[$i]->email."
            </td>
            <td>".
            $ObjJson[$i]->pass."
            </td>
            <td>
            <input class='btn btn-primary btn-sm'type='button' value='modificar'data-toggle='modal' data-target='#modalModificar' onclick='FormMod(".json_encode($ObjJson[$i]->email).")'/>
            <input class='btn btn-danger btn-sm'type='button' value='eliminar' data-toggle='modal' data-target='#modalEliminar' onclick='FormElim(".json_encode($ObjJson[$i]->email).")'/>
            </td>
            </tr>";
            }
         }
        return $tabla."</table>";
        }
        public static function TraerAccesosCorrectos(){
            $conexion=Acceso::DameUnObjetoAcceso();
            $sql="SELECT * from accesos";
            $db=$conexion->RetornarConsulta($sql);
            $db->execute();
            $usuarios=$db->fetchAll();
            return json_encode($usuarios);
        }
        public static function MostrarAccesos(){
            $lista=Usuario::TraerAccesosCorrectos();
            $ObjJson=json_decode($lista);
            if(isset($ObjJson))
            {
            $tabla = "<table class='table table-bordered mt-5 pr-3' align='center'>
            <tr><td>Email </td><td>Fecha </td><td>IP</td><td>Correcto</td>";
            for($i = 0 ; $i < count($ObjJson) ; $i++)
            {
            $tabla.="<tr>
            <td>".
            $ObjJson[$i]->email."
            </td>
            <td>".
            $ObjJson[$i]->fecha."
            </td>
            <td>".
            $ObjJson[$i]->ip."
            </td>
            <td>".
            $ObjJson[$i]->correcto."
            </td>
            </tr>";
            }
         }
        return $tabla."</table>";
        }
        public static function Alta($email,$pass){
            $obj= new stdClass();
            $conexion=Acceso::DameUnObjetoAcceso();
            $sql="INSERT INTO usuarios (email,pass) VALUES(:email,:pass)";
            $db=$conexion->RetornarConsulta($sql);
            $db->bindValue(":email",$email);
            $db->bindValue(":pass",$pass);
            if($db->execute()){
                $obj->exito=true;
            }else{
                $obj->exito=false;
            }
            echo json_encode($obj);
        }
        public static function Modificar($email,$pass){
            $obj= new stdClass();
            $conexion=Acceso::DameUnObjetoAcceso();
            $sql="UPDATE usuarios SET pass=:pass WHERE email=:email";
            $db=$conexion->RetornarConsulta($sql);
            $db->bindValue(":email",$email);
            $db->bindValue(":pass",$pass);
            if($db->execute()){
                $obj->exito=true;
            }else{
                $obj->exito=false;
            }
            echo json_encode($obj);
        }
        public static function Eliminar($email){
            $obj= new stdClass();
            $conexion=Acceso::DameUnObjetoAcceso();
            $sql="DELETE from usuarios WHERE email=:email";
            $db=$conexion->RetornarConsulta($sql);
            $db->bindValue(":email",$email);
            if($db->execute()){
                $obj->exito=true;
            }else{
                $obj->exito=false;
            }
            echo json_encode($obj);
        }
    }

?>