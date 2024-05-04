<?php

class accesModel
{
    private $db;
    private $usuario;

    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
    }

    public function acceso($rutUsuario)
    {
        //$consulta = mysqli_query($this->db, "SELECT * FROM perfilesc WHERE rut = '$rutUsuario'"); //para hosting de richard, le agrege una c a nombre de tabla perfiles
        $consulta = mysqli_query($this->db, "SELECT * FROM perfiles WHERE rut = '$rutUsuario'"); // para local
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->usuario[] = $filas;
        }
        return $this->usuario;
    }
    public function sumarIntento($arre){
        $str= mysqli_query($this->db, "update perfiles set intentos= ".$arre[1]." where rut='".$arre[0]."'");
        if($str == false){
            $respuestaUpdateIntento="Error de actualizacion";
        }else{
            $respuestaUpdateIntento="ok";
        }
        return $respuestaUpdateIntento;
          
    }
}
class userContacto
{
    private $db;
    private $nombre;
    private $apellido;
    private $telefono;
    private $mensaje;
    private $email;
    private $fecha;

    public function __construct(){
        require_once("conexion.php");
        $this->db=Conectarse();
    }
    public function insertarContacto($arreglo){
        $arre=$arreglo;
        $str= mysqli_query($this->db, "INSERT INTO contactlist (nombre, apellido, email, telefono, mensaje, fecha) VALUES ('".$arre[0]."', '".$arre[1]."', '".$arre[2]."', '".$arre[3]."', '".$arre[4]."', '".$arre[5]."')");
        if($str == false){
            $respuestaContactList="Error de Contacto";
        }else{
            $respuestaContactList="ok";
        }
        return $respuestaContactList;
    }


}
class nuevoUsuario{
    private $db;
    private $rut;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $edad;
    private $telefono;
    private $email;
    private $fecha;
    private $pass;
    private $nivelAcceso;

    public function __construct(){
        require_once("conexion.php");
        $this->db=Conectarse();
    }
    public function insertarNuevoUsuario($arreglo){
        $arre=$arreglo;
        $str= mysqli_query($this->db, "INSERT INTO perfiles (rut, pass, nombre, apellidop, apellidom, edad, email, telefono, nivel, intentos) VALUES ('".$arre[0]."', '".$arre[1]."', '".$arre[2]."', '".$arre[3]."', '".$arre[4]."', '".$arre[5]."', '".$arre[6]."', '".$arre[7]."', '".$arre[8]."', '".$arre[9]."')");
        if($str == false){
            $respuestaIngresoNew="Error de Ingreso";
        }else{
            $respuestaIngresoNew="ok";
        }
        return $respuestaIngresoNew;
    }
}