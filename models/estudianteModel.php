
<?php
class programa
{
    private $db;
    private $cursos;

    public function __construct()
    {
        require_once("conexion.php");
        $this->db = Conectarse();
    }

    public function obtenerCursos()
    {
        $consulta = mysqli_query($this->db, "SELECT * FROM curso");
        while ($filas = mysqli_fetch_array($consulta)) {
            $this->cursos[] = $filas;
        }
        return $this->cursos;
    }
    public function obtenerLecciones($nombreCurso){
        $str= mysqli_query($this->db, "SELECT * FROM  contenido_leccion where nombre_curso = '$nombreCurso' ");
        if(mysqli_num_rows($str) > 0){
            while ($filas = mysqli_fetch_array($str)) {
                $this->lecciones[] = $filas;
            }
            return $this->lecciones;
        }else{
            return null;
        }
        
          
    }
}
?>
