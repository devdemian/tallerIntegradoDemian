<?php

$rutUsuario = $_POST['rut'];
include('./controllers/funcionesController.php');
$confirmacion=validarut($rutUsuario);
if($confirmacion=='ok'){
    $aregloNewContacto=array();
    $aregloContacto[0]=$_POST['rut'];
    $claveIngresada=armarPass();//medida de seguridad Nº 2
    $aregloContacto[1]= hashearPass($claveIngresada);// medida de seguridad Nº1
    $aregloContacto[2]=$_POST['nombre'];
    $aregloContacto[3]=$_POST['apellidop'];
    $aregloContacto[4]=$_POST['apellidom'];
    $aregloContacto[5]=$_POST['edad'];
    $aregloContacto[6]=$_POST['email'];
    $aregloContacto[7]=$_POST['telefono'];
    $aregloContacto[8]=2;
    $aregloContacto[9]=0;
    require_once("./models/accesModel.php");// trae accessModel
    $nuevoUsuario = new nuevoUsuario();
    $usuarioN = $nuevoUsuario->insertarNuevoUsuario($aregloContacto);//array de la consulta
    $textoRegistro="";
    $textoRegistro=false;
    if($usuarioN=='ok'){
        $textoRegistro="Registro exitoso, tu usuario Es".$aregloContacto[0]." y tu clave es: ".$claveIngresada."";
        require_once('./views/login.php');
    }else{
        $textoRegistro="ups, hubo un error, intenta nuevamente";
        require_once('./views/registroExterno.php'); 
    }         
                
}else{
    $texto=validarut($rutUsuario);
    require_once './views/registroExterno.php';
    $opc="";
    $_POST=array();
}




    
    
?>