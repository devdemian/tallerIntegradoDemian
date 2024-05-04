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
            if($user['intentos']==3){
                $texto="Cuenta con rut".$rutUsuario." bloqueada, han completado tres intentos de login fallido, dirijase a recuperacion de cuenta";
                require_once('./views/login.php');
            }else{
                $intento=$user['intentos']; // recupero numero de intentos
                if($claveHasheada==$user['pass'] & $user['nivel']=='1'){// comparo clave y nivel
                    $intento=0;
                    $arreUpdateIntento=array($rutUsuario, $intento);
                    require_once("./models/accesModel.php");
                    $updateIntento = new accesModel();
                    $updateIntento = $updateIntento->sumarIntento($arreUpdateIntento);

                    $texto="validado nivel 1";
                    require_once './views/admin.php';
                    $opc="";
                    $_POST=array();
                }elseif($claveHasheada==$user['pass'] & $user['nivel']=='2'){// comparo clave y nivel
                    $intento=0;
                    $arreUpdateIntento=array($rutUsuario, $intento);
                    require_once("./models/accesModel.php");
                    $updateIntento = new accesModel();
                    $updateIntento = $updateIntento->sumarIntento($arreUpdateIntento);

                    $texto="validado nivel 2";
                    require_once './views/estudiante.php';
                    $opc="";
                    $_POST=array();
                  
                } elseif($claveHasheada != $user['pass']){// en caso de no coincidir clave
                    $intento+=1;
                    $arreUpdateIntento=array($rutUsuario, $intento);
                    require_once("./models/accesModel.php");
                    $updateIntento = new accesModel();
                    $updateIntento = $updateIntento->sumarIntento($arreUpdateIntento);//array de la consulta
                    if($updateIntento=='ok'){
                        if($intento<3){
                            $texto="Contraseña incorrecta, Intento fallido numero: ".$intento."\n Recuerde que al tercer intento 
                            su cuenta sera bloqueada por razones de seguridad";
                        }else{
                            $texto="Contraseña incorrecta, Intento fallido numero: ".$intento."\n Su cuenta ha sido bloqueada 
                            por razones de seguridad";
                        }
                        require_once('./views/login.php');
                    }else{
                        $texto="Contraseña incorrecta, Pero Error en update de intento";
                        require_once('./views/login.php'); 
                    } 

                    $opc="";//limpieza de variable
                    $_POST=array(); // limpieza de variable
                }  
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