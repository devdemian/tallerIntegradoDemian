<?php
function bienvenida($str){
    $saludo='<p class="parrafoInfo1">Hola '.$str.' nos complace saludarte y darte la Bienvenida a tu espacio de programacion,
    es aca donde visualizaras y realizaras las diferentes lecciones de cada uno de los cursos disponibles, podras ver tus avances, 
    podras repetir las lecciones previamente aprobadas para reforzar tus conocimientos y lo mas 
    importante; ColegaBot te acompañara en cada uno d los ejercicios y evaluaciones para que tu
    aprendizaje sea lo mas facil posible</p>
    <br>
    <div class="estudiar">
        <div class="imagenEstudiar"><img class = "imagenStudy"src="./public/img/study.jpg" alt="palabra study en scarble"></div>
        <div class="textoEstudiar">
            <p>Antes que nada permitenos explicar lo que conlleva estudiar programacion;<p><br>
            <h3>Estudiár Programación</h3><br>
            <ul class="ListaIntro">
                <li class="itemListaIntro">Estudiar programación implica aprender a comunicarte con las computadoras a través de un lenguaje de instrucciones que les permita realizar tareas específicas</li>
                <li class="itemListaIntro">Implica entender los fundamentos de la lógica de programación, quiza tengamos que leer un poco</li>
                <li class="itemListaIntro">Implica familiarizarse con lenguajes de programación</li>
                <li class="itemListaIntro">El estudio también incluye práctica activa, resolviendo problemas y creando proyectos simples para aplicar los conceptos aprendidos</li>
                <li class="itemListaIntro">La consistencia y la paciencia son clave, ya que el proceso de aprendizaje puede ser desafiante pero gratificante</li>
            </ul>
        </div>
    </div>
    <h3>Recomendaciones para asegurar el exito eurso que estaspor comenzar.</h3>';
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
<img src="" alt="">