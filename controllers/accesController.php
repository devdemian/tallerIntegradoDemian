<?php
/* Instrucciones:
1- Toda accion ocurrira en el index 
2- Por ello enviar aualquier formulario o instruccion a index(#) 
3- Usar solo POST en formularios
4- en cada formulario que envien, debe ir un hidden llamado opcion, el
cual representara la orden para llamar lo que se nesesite
5- Sigan la misma tematica de los nombres de los controladores*/


if (isset($_POST['opcion'])) { 
    $opc = $_POST['opcion'];
    if ($opc == "login") {
        require_once('./controllers/loginController.php'); // ejecuta controller login
    }elseif ($opc=="desplegarLogin") { 
        require_once('./views/login.php'); // pinta vista login
    }elseif ($opc == "desplegarRegistro") {
        require_once('./views/registroExterno.php'); // pinta vista registroExterno
    }elseif($opc=="newRegistroExterno"){
        require_once('./controllers/registroExternoController.php'); //Ejecuta controller registroExterno
    }elseif($opc=="contactList"){
        require_once('./controllers/contactListController.php'); //ejecuta controller contactList
    }elseif($opc=="usuarioAdmin"){
        require_once('./controllers/adminController.php');//ejecutar controller admin (Demian)
    }
}else{
    require_once('./views/home.php'); //pinta home
}
