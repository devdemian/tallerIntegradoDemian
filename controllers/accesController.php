<?php
// Este archivo cumple la funcion de ir llamando al index las paginas que se nesesitan de acuerdo a las peticiones


if (isset($_POST['opcion'])) { // en caso de haber una solicitud de tipo POST
    $opc = $_POST['opcion'];//Asigno valor a $opc
    if ($opc == "login") {//si valor es login, validara usuario y pass
        $rutUsuario = $_POST['usuario'];
        $claveUsuario=$_POST['pass'];
        include('./controllers/funcionesController.php');
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
                        if($claveUsuario==$user['pass'] & $user['nivel']=='1'){// comparo clave y nivel
                            $texto="validado nivel 1";
                            require_once './views/admin.php';
                            $opc="";
                            $_POST=array();
                          
                            
                        }elseif($claveUsuario==$user['pass'] & $user['nivel']=='2'){// comparo clave y nivel
                            $texto="validado nivel 2";
                            require_once './views/estudiante.php';
                            $opc="";
                            $_POST=array();
                          
                        } elseif($claveUsuario != $user['pass']){// en caso de no coincidir clave
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
    }elseif ($opc=="desplegarLogin") { // si valor de opc es desplegar, traera pagina de login a index
        require_once('./views/login.php');
    }elseif($opc=="contactList"){
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
            $textoContactList="Gracias por contactarnos, responderemos tus inquietudes pronto, en tu correo encontraras una copia de tu consulta";
            require_once('./views/home.php'); // abre home del sitio ya que nohay ninguna solicitud
        }else{
            $textoContactList="ups, hubo un error, intenta nuevamente";
            require_once('./views/home.php'); // abre home del sitio ya que nohay ninguna solicitud
        }
    }
}else{
    require_once('./views/home.php'); // abre home del sitio ya que nohay ninguna solicitud
}
