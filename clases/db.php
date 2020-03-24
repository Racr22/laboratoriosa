<?php
     class Acceso{
        private static $_objetoAccesoDatos;
    private $_objetoPDO;

        private  function __construct(){
            try {
 
                $usuario='root';
                $clave='';
    
                $this->_objetoPDO = new PDO('mysql:host=localhost;dbname=usuarios;charset=utf8', $usuario, $clave);
     
            } catch (PDOException $e) {
     
                print "Error!!!<br/>" . $e->getMessage();
     
                die();
            }
        }
        public function RetornarConsulta($sql)
        {
        return $this->_objetoPDO->prepare($sql);
        }
        public static function DameUnObjetoAcceso()//singleton
        {
            if (!isset(self::$_objetoAccesoDatos)) {       
                self::$_objetoAccesoDatos = new Acceso(); 
            }
     
            return self::$_objetoAccesoDatos;        
        }
    }
?>