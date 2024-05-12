<?php
    require_once("./models/estudianteModel.php");
    $cursosMenu = new programa();
    $cursos= array();
    $cursos = $cursosMenu->obtenerPrograma();
?>