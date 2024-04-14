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
