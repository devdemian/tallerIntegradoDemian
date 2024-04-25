<?php
date_default_timezone_set("America/Santiago");
$fecha=date("Y-m-d H:i:s");
$aregloContacto=array();
$aregloContacto[0]=$_POST['nombre'];
$aregloContacto[1]=$_POST['apellido'];
$aregloContacto[2]=$_POST['email'];
$aregloContacto[3]=$_POST['telefono'];
$aregloContacto[4]=$_POST['mensaje'];
$aregloContacto[5]=$fecha;
require_once("./models/accesModel.php");// trae accessModel
$usuarioContacto = new userContacto();
$usuarioC = $usuarioContacto->insertarContacto($aregloContacto);//array de la consulta
$textoContactList="";
$insersionContacto=false;
if($usuarioC=='ok'){
    $insersionContacto=true;
    require_once('./controllers/mailerController.php'); // abre home del sitio ya que nohay ninguna solicitud
}else{
    $textoContactList="ups, hubo un error, intenta nuevamente";
    require_once('./views/home.php'); // abre home del sitio ya que nohay ninguna solicitud
}
?>