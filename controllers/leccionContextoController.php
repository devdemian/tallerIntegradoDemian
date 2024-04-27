<?php
function bienvenida($str){
    $saludo='<p class="parrafoInfo1">Hola '.$str.' nos complace saludarte y darte la Bienvenida a tu espacio de programacion,
    es aca donde visualizaras y realizaras las diferentes lecciones de tu curso, podras ver tus avances, 
    podras repetir las lecciones previamente aprobadas para reforzar tus conocimientos y lo mas 
    importante; ColegaBot te acompañara en cada uno d los ejercicios y evaluaciones para que tu
    aprendizaje sea lo mas facil posible</p><br><h3>Comencemos...</h3>';
    echo $saludo;
}
$conceptoUno="¿ Que es la Programación ?-La programación es el proceso de diseñar, escribir, probar y mantener el código informático para crear software, 
aplicaciones, sitios web y otros sistemas informáticos. Es un medio para dar instrucciones a una computadora para que realice 
ciertas tareas  de acuerdo con una secuencia de comandos o algoritmos específicos.";

$conceptoDos="¿ Variables ?-ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg";

if(isset($_POST['concepto'])){
    $conceptoSolicitado=$_POST['concepto'];
    if($conceptoSolicitado=="1"){
        echo $conceptoUno;
    }elseif($conceptoSolicitado=="2"){
        echo $conceptoDos;
    }
}

?>