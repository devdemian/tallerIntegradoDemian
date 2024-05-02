<?php
$rutUsuario = $_POST['usuario'];
$claveUsuario=$_POST['pass'];
include('./controllers/funcionesController.php');
$claveHasheada=hashearPass($claveUsuario);
$confirmacion=validarut($rutUsuario);
if($confirmacion=='ok'){
    require_once("./models/accesModel.php");// trae accessModel
    $usuarioModel = new accesModel();
    $usuario = $usuarioModel->acceso($rutUsuario);//array de la consulta
    $texto=".";
    $validado=false;
    if($usuario==null){// si array es null, quiere decir que no se encontro registro con ese rut
        $texto="No existe en nuestros registros el rut ".$rutUsuario;
        require_once './views/login.php';
    }else{// en caso que si tiene un registro
        foreach($usuario as $user){
                if($claveHasheada==$user['pass'] & $user['nivel']=='1'){// comparo clave y nivel
                    $texto="validado nivel 1";
                    require_once './views/admin.php';
                    $opc="";
                    $_POST=array();
                }elseif($claveHasheada==$user['pass'] & $user['nivel']=='2'){// comparo clave y nivel
                    $texto="validado nivel 2";
                    require_once './views/estudiante.php';
                    $opc="";
                    $_POST=array();
                  
                } elseif($claveHasheada != $user['pass']){// en caso de no coincidir clave
                    $texto="Contraseña incorrecta, intente nuevamente";
                    require_once './views/login.php';
                    $opc="";
                    $_POST=array();
                }  
            }
    }   

}else{
    $texto=validarut($rutUsuario);
    require_once './views/login.php';
    $opc="";
    $_POST=array();
}
?>