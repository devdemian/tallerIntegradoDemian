<?php
$usuario='Richard '; // vincular aca la sesion para hacer esto de forma dinamica
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
    <link rel="stylesheet" href="../public/css/dashboard.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu Administrador</title>
</head>

<body>
    <div class="contai">
        <div class="sidebar">
            <div class="menu-btn">
                <i class="ph-bold ph-caret-left"></i>
            </div>
            <div class="head">
                <div class="user-img">
                    <img src="../public/img/logoColegaBot2.png" alt="" />
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
                                <span class="text"><?php echo $usuario ?></span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-calendar-blank"></i>
                                <span class="text">Tablas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Botones</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#" onclick="concepto('1')">
                                    <form action="#" method="post">
                                        <input type="hidden" name="opcion" value="usuarioAdmin">
                                        <input type="hidden" name="accion" value="modificardatos">
                                        <input type="hidden" name="rut" value="">
                                        <button type="submit" class="btn btn-warning">Modificar</button>
                                    </form>
                                    <a href="#">
                                        <form action="#" method="post">
                                            <input type="hidden" name="opcion" value="usuarioAdmin">
                                            <input type="hidden" name="accion" value="eliminar">
                                            <input type="hidden" name="rut" value="<?php echo $perfil['rut']; ?>">
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </a>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#" onclick="concepto('2')">
                                        <span class="text">Leccion 2 - Variables en programacion</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Leccion 3 - Operadores</span>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-chart-bar"></i>
                                <span class="text">Gestion de Cursos</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../views/formCurso.php">
                                        <span class="text">Fomulario de Curso</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="../views/formLeccion.php">
                                        <span class="text">Formulario de lecciones</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <p class="title">Otros</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class=" icon ph-bold ph-certificate"></i>
                                <span class="text">Revisa Tus Certificaciones</span>
                            </a>
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
            <div class="form_leccion">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <h2 class="mb-4" style="text-align: center;">Agregar Lección</h2>
                    <form>
                      <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" id="titulo" placeholder="Ingrese el título">
                      </div>
                      <div class="form-group">
                        <label for="texto">Texto</label>
                        <textarea class="form-control" id="texto" rows="4" placeholder="Ingrese el texto"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="nombre_curso">Nombre del Curso</label>
                        <input type="text" class="form-control" id="nombre_curso" placeholder="Ingrese el nombre del curso">
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="numero_leccion">N° de Lección</label>
                          <input type="number" class="form-control" id="numero_leccion" placeholder="Ingrese el número de lección">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="nivel">Nivel</label>
                          <input type="text" class="form-control" id="nivel" placeholder="Ingrese el nivel">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Agregar Contenido</button>
                    </form>
                  </div>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>
    <script src="../public/js/dashboard.js"></script>
    <script src="../public/js/admin.js"></script>
    <script src=" https://code.jquery.com/jquery-3.7.1.js"></script>
    
</body>

</html>
