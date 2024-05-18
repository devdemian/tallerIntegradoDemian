<?php

require_once('./models/adminModel.php'); // Incluye el modelo adminModel
$modelo = new adminModel();
$perfiles = $modelo->verPerfiles(); // Obtener perfiles

$textoRegistro = false; // Inicializar la variable de registro



if (!empty($_POST)) {
    $rut = "";
    $nombre = "";
    $apellidop = "";
    $apellidom = "";
    $edad = "";
    $email = "";
    $telefono = "";
    $nivel = "";
    // Verificar la existencia de las claves en $_POST antes de acceder a ellas
    if (isset($_POST['accion'])) {
        $acc = $_POST['accion'];
        if ($acc == 'insertar') {
            $rutUsuario = $_POST['rut'];
            include('./controllers/funcionesController.php');
            $confirmacion = validarut($rutUsuario);
            if ($confirmacion == 'ok') {
                $arregloContacto = array();
                $arregloContacto[0] = $_POST['rut'];
                $claveIngresada = armarPass(); //medida de seguridad Nº 2
                $arregloContacto[1] = hashearPass($claveIngresada); // medida de seguridad Nº1
                $arregloContacto[2] = $_POST['nombre'];
                $arregloContacto[3] = $_POST['apellidop'];
                $arregloContacto[4] = $_POST['apellidom'];
                $arregloContacto[5] = $_POST['edad'];
                $arregloContacto[6] = $_POST['email'];
                $arregloContacto[7] = $_POST['telefono'];
                $arregloContacto[8] = $_POST['nivel'];
                $arregloContacto[9] = 0;
                // Insertar perfil
                $insertarPerfil = $modelo->insertarPerfil($arregloContacto);

                if ($insertarPerfil == 'ok') {
                    $textoRegistro = "Registro exitoso, el usuario Es" . $arregloContacto[0] . " y su clave es: " . $claveIngresada . "";
                    require_once './views/admin.php';
                } else {
                    $textoRegistro = "Error al insertar el perfil: "; // Mostrar mensaje de error
                    require_once './views/admin.php';
                }
            }
                /*} else {
                        $texto=validarut($rutUsuario);
                        $textoRegistro = "Faltan datos para insertar el perfil"; // Mensaje si faltan datos
                        require_once './views/admin.php';
                    }*/
        } elseif ($acc == 'modificar') {
            // Acción de modificación

            $arregloContacto = array();
            $arregloContacto[0] = $_POST['rut'];
            $arregloContacto[2] = $_POST['nombre'];
            $arregloContacto[3] = $_POST['apellidop'];
            $arregloContacto[4] = $_POST['apellidom'];
            $arregloContacto[5] = $_POST['edad'];
            $arregloContacto[6] = $_POST['email'];
            $arregloContacto[7] = $_POST['telefono'];
            $arregloContacto[8] = $_POST['nivel'];

            // Modificar perfil
            $modificarPerfil = $modelo->modificarPerfil($arregloContacto);

            if ($modificarPerfil == 'ok') {
                $textoRegistro = "Modificación exitosa, el usuario Es" . $arregloContacto[0] . " y su clave es: " . $claveIngresada . "";
                require_once './views/admin.php';
            } else {
                $textoRegistro = "Error al modificar el perfil";
                require_once './views/admin.php';
            }
        } elseif ($acc == 'eliminar') {
            if (isset($_POST['rut'])) {
                $rut = $_POST['rut']; // Obtener el RUT del formulario
                $eliminarp = $modelo->eliminarPerfil($rut); // Pasar el RUT directamente
                if ($eliminarp == 'ok') {
                    $textoRegistro = "Eliminación exitosa del usuario";
                } else {
                    $textoRegistro = "Hubo un error durante la eliminación: " . $eliminarp; // Mostrar mensaje de error
                }
            }
        } elseif ($acc == 'modificardatos') {
            if (isset($_POST['rut'])) {
                $rut = $_POST['rut']; // Obtener el RUT del formulario
                $usuario = $modelo->obtenerPerfilPorRut($rut); // Obtener los datos del usuario por su RUT
                // Asignar los valores a las variables
                $rut = $usuario['rut'];
                $nombre = $usuario['nombre'];
                $apellidop = $usuario['apellidop'];
                $apellidom = $usuario['apellidom'];
                $edad = $usuario['edad'];
                $email = $usuario['email'];
                $telefono = $usuario['telefono'];
                $nivel = $usuario['nivel'];
        
                require_once './views/admin.php'; // Mostrar el formulario con los datos cargados
            } else {
                $textoRegistro = "Error: Falta el RUT del usuario";
            }
        } elseif ($acc == 'insertarContenido') {
            if (isset($_POST['titulo'], $_POST['texto'], $_POST['nombre_curso'], $_POST['nivel'], $_POST['num_lecciones'])) {
                $arregloContenido = array();
                $arregloContenido[0] = $_POST['titulo'];
                $arregloContenido[1] = $_POST['texto'];
                $arregloContenido[2] = $_POST['nombre_curso'];
                $arregloContenido[3] = $_POST['nivel'];
                $arregloContenido[4] = $_POST['num_lecciones'];

                // Insertar perfil
                $insertarContenido = $modelo->insertarContenido($arregloContenido);

                if ($insertarContenido == 'ok') {
                    $textoRegistro = "Registro exitoso";
                    require_once './views/admin.php';
                } else {
                    $textoRegistro = "Error al insertar el perfil: "; // Mostrar mensaje de error
                    require_once './views/admin.php';
                }
            }
        }
    } else {
        $texto = validarut($rutUsuario);
        require_once './views/admin.php';
        $opc = "";
        $acc = "";
        $_POST = array();
    }
}


// Mostrar la vista independientemente de si se realizó alguna acción o no
require_once './views/admin.php';
$opc = "";
$acc = "";
