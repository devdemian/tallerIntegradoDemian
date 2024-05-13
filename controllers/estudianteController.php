<?php
    require_once("./models/estudianteModel.php");
    $cursosMenu = new programa();
    $cursos= $cursosMenu->obtenerCursos();
    $arrayC=array();
    foreach($cursos as $var){
        $nombreCurso=$var['nombre'];
        $arrayC[]=$nombreCurso;
    }
    $arrayCL=array();
    for($i=0; $i<count($arrayC);$i++){
        $leccionesMenu = new programa();
        $duo=$arrayC[$i];
        $lecciones= $leccionesMenu->obtenerLecciones($arrayC[$i]);
        if($lecciones!=null){
            foreach($lecciones as $var){
                
                $nombreLeccion=$var['titulo'];
                $id=$var['id'];
                $duo.="-".$nombreLeccion.",".$id;
            }
            $arrayCL[]=$duo;
            
        }
        $duo="";
    }
?>