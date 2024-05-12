<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./public/css/dashboard1.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu Administrador</title>
</head>
<?php
if (isset($texto)) {
    echo $texto;
} elseif (isset($textoRegistro)) {
    echo $textoRegistro;
}
?>

<body>
    <div class="contai">
        <div class="sidebar">
            <div class="menu-btn">
                <i class="ph-bold ph-caret-left"></i>
            </div>
            <div class="head">
                <div class="user-img">
                    <img src="./public/img/logoColegaBot2.png" alt="" />
                </div>

            </div>
            <div class="nav">
                <div class="menu">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-house-simple"></i>
                                <span class="text">Inicio </span>
                            </a>
                            <a href="#">
                                <i class="icon ph-bold ph-user"></i>
                                <span class="text"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Gestion de usuarios</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#" onclick="concepto('1')">
                                        <span class="text">Ver Usuarios</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="concepto('2')">
                                        <span class="text">Agregar o modificar usuarios</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Gestion de contenido</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#" onclick="concepto('1')">
                                        <span class="text">Ver Contenido</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="concepto('2')">
                                        <span class="text">Agregar contenido</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Modificar contenido</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-chart-bar"></i>
                                <span class="text">Estadisticas</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <span class="text">Ver estadisticas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Reporte Estudiantes aprobados</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu">
                <p class="title">Cuenta</p>
                <ul>
                    <li>
                        <a href="#">
                            <i class="icon ph-bold ph-info"></i>
                            <span class="text">Ayuda</span>
                        </a>
                    </li>
                    <li>
                        <a href="../views/logout.php">
                            <i class="icon ph-bold ph-sign-out"></i>
                            <span class="text">Cerrar Sesión</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="credits">
            <!-- <div class="concepto"> -->
            <div class="contenedor-formulario">
                <button class="btn btn-success" id="toggleForm">Mostrar/ocultar formulario contenido</button>
                <div class="formulario">

                    <div class="container">
                        <h2>Formulario Contenido</h2>
                        <form action="#" method="POST">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="titulo">Titulo:</label>
                                        <input class="form-control" type="text" name="titulo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="texto">Texto:</label>
                                        <input class="form-control" type="text" name="texto" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nombre curso">Nombre de curso:</label>
                                        <input class="form-control" type="text" name="nombrecurso" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nivel">Nivel:</label>
                                        <input class="form-control" type="number" name="nivel" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="numleccion">Numero de leccion:</label>
                                        <input class="form-control" type="number" name="numleccion" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <input type="hidden" name="opcion" value="usuarioAdmin">
                                <input type="hidden" name="accion">
                                <div class="col-auto mb-2">
                                    <input class="btn btn-success" type="submit" name="accion" value="insertarContenido">
                                </div>
                                <div class="col-auto mb-2">
                                    <input class="btn btn-warning" type="submit" name="accion" value="modificar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- <h2 class="tituloLeccion" id="mostrarTitulo"></h2>
                <p id="mostrarConcepto"></p> -->
            <!-- </div> -->
            <div class="tablita">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Titulo</th>
                            <th scope="col">Texto</th>
                            <th scope="col">Nombre curso</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Numero leccion</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    
                        <tbody>
                            <tr class="cuadros">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                    <!-- Botón para modificar datos -->
                                    <form action="#" method="post">
                                        <input type="hidden" name="opcion" value="usuarioAdmin">
                                        <input type="hidden" name="accion" value="modificardatos"> <!-- Acción modificardatos -->
                                        <input type="hidden" name="rut" value="">
                                        <button type="submit" class="btn btn-warning">Modificar</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="#" method="post">
                                        <input type="hidden" name="opcion" value="usuarioAdmin">
                                        <input type="hidden" name="accion" value="eliminar">
                                        <input type="hidden" name="rut" value="">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        function validar(inputElement) {
            var valor = inputElement.value;
            var patron = /^[^!@#$%^&*()+{}\[\]\"\':;<>~\\/]+$/;
            if (patron.test(valor)) {
                inputElement.setCustomValidity('');
            } else {
                inputElement.setCustomValidity('El campo, contiene elementos no permitidos');
            }
        }
    </script>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
    <script src="./public/js/dashboard.js"></script>
    <script src="./public/js/lecciones.js"></script>
    <script src="./public/js/admin.js"></script>

</body>

</html>