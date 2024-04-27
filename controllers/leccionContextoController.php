<?php
$conceptoUno="¿ Que es la Programación ?-La programación es el proceso de diseñar, escribir, probar y mantener el código informático para crear software, 
aplicaciones, sitios web y otros sistemas informáticos. Es un medio para dar instrucciones a una computadora para que realice 
ciertas tareas  de acuerdo con una secuencia de comandos o algoritmos específicos.";

$conceptoDos="¿ Variables ?-ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg
ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg";


$conceptoSolicitado=$_POST['concepto'];
if($conceptoSolicitado=="1"){
    echo $conceptoUno;
}elseif($conceptoSolicitado=="2"){
    echo $conceptoDos;
}

?>