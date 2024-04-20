<?php

$rutUsuario = $_POST['rut'];
include('./controllers/funcionesController.php');
$confirmacion=validarut($rutUsuario);
if($confirmacion=='ok'){
    $aregloNewContacto=array();
    $aregloContacto[0]=$_POST['rut'];
    $aregloContacto[1]= armarPass($_POST['rut'], $_POST['nombre']);
    $aregloContacto[2]=$_POST['nombre'];
    $aregloContacto[3]=$_POST['apellidop'];
    $aregloContacto[4]=$_POST['apellidom'];
    $aregloContacto[5]=$_POST['edad'];
    $aregloContacto[6]=$_POST['email'];
    $aregloContacto[7]=$_POST['telefono'];
    $aregloContacto[8]=2;
    require_once("./models/accesModel.php");// trae accessModel
    $nuevoUsuario = new nuevoUsuario();
    $usuarioN = $nuevoUsuario->insertarNuevoUsuario($aregloContacto);//array de la consulta
    $textoRegistro="";
    $textoRegistro=false;
    if($usuarioN=='ok'){
        $textoRegistro="Registro exitoso, tu usuario Es".$aregloContacto[0]." y tu clave es: ".$aregloContacto[1]."";
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