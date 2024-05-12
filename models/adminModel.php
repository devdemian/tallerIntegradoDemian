<?php

class adminModel
{
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

    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
    }

    public function verPerfiles()
    {
        $query = "SELECT * FROM perfiles";
        $result = mysqli_query($this->db, $query);
        $perfiles = array();
        while ($fila = mysqli_fetch_assoc($result)) {
            $perfiles[] = $fila;
        }
        return $perfiles;
    }

    public function insertarPerfil($arreglo){
        $arre=$arreglo;
        $str= mysqli_query($this->db, "INSERT INTO perfiles (rut, pass, nombre, apellidop, apellidom, edad, email, telefono, nivel, intentos) VALUES ('".$arre[0]."', '".$arre[1]."', '".$arre[2]."', '".$arre[3]."', '".$arre[4]."', '".$arre[5]."', '".$arre[6]."', '".$arre[7]."', '".$arre[8]."','".$arre[9]."')");
        if($str == false){
            $respuestaInsertar="Error de Ingreso";
        }else{
            $respuestaInsertar="ok";
        }
        return $respuestaInsertar;
    }
    public function modificarPerfil($arreglo){
        $arre=$arreglo;
        $str= mysqli_query($this->db, "UPDATE perfiles SET 
            pass = '".$arre[1]."', 
            nombre = '".$arre[2]."', 
            apellidop = '".$arre[3]."', 
            apellidom = '".$arre[4]."', 
            edad = '".$arre[5]."', 
            email = '".$arre[6]."', 
            telefono = '".$arre[7]."', 
            nivel = '".$arre[8]."' 
            WHERE rut = '".$arre[0]."'");
        if($str == false){
            $respuestaModificar="Error de Ingreso";
        }else{
            $respuestaModificar="ok";
        }
        return $respuestaModificar;
    }
    public function eliminarPerfil($rut) {
        $query = "DELETE FROM perfiles WHERE rut = '$rut'";
        $result = mysqli_query($this->db, $query);
        
        if ($result) {
            return "ok"; // Eliminación exitosa
        } else {
            return mysqli_error($this->db); // Error al eliminar
        }
    }
    public function obtenerPerfilPorRut($rut)
    {
        $query = "SELECT * FROM perfiles WHERE rut = '$rut'";
        $result = mysqli_query($this->db, $query);
        
        if ($result) {
            return mysqli_fetch_assoc($result); // Devuelve los datos del perfil si se encontró
        } else {
            return false; // Retorna false si hubo un error o el perfil no se encontró
        }
    }

    public function verContenido()
    {
        $query = "SELECT * FROM perfiles";
        $result = mysqli_query($this->db, $query);
        $contenido = array();
        while ($fila = mysqli_fetch_assoc($result)) {
            $contenido[] = $fila;
        }
        return $contenido;
    }
    public function insertarContenido($arreglo){
        $arre=$arreglo;
        $str= mysqli_query($this->db, "INSERT INTO contenido_leccion (titulo, texto, nombre_curso, nivel, num_leccion) VALUES ('".$arre[0]."', '".$arre[1]."', '".$arre[2]."', '".$arre[3]."', '".$arre[4]."')");
        if($str == false){
            $respuestaInsertar="Error de Ingreso de contenido";
        }else{
            $respuestaInsertar="ok";
        }
        return $respuestaInsertar;
    }
}

