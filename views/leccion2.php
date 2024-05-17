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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https: //fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="../public/css/dashboard.css" />
    <link rel="stylesheet" href="../public/css/estiloEstudiante.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" >

    <title>Menu Estudiante</title>
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
                            <ul class="sub-menu">
                                <li>
                                    <a href="./pruebas.php" onclick="concepto('1')">
                                        <span class="text">Ingresar Usuario</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="concepto('2')">
                                        <span class="text">Leccion 2 - Variables en programacion</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Leccion 3 - Operadores</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Curso 2 - Programación I</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#" onclick="concepto('1')">
                                        <span class="text">Leccion1 - ¿ Que es la programaci&oacute;n ?</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="concepto('2')">
                                        <span class="text">Leccion 2 - Variables en programacion</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Leccion 3 - Operadores</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-calendar-blank"></i>
                                <span class="text">Notificaciones</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-chart-bar"></i>
                                <span class="text">Tus Logros</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="#">
                                        <span class="text">logro 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">logro 2</span>
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
           <div class="contenedor-leccion2">  
                <div class="titulo">
                    <h2>Lección 2: Variables</h2>
                </div>
                <div class="contenido">
                    <p>
                        En programación, una variable es como una caja imaginaria en la que puedes almacenar información. Esta información puede ser números, texto, 
                        valores verdadero o falso (booleanos), entre otros tipos de datos que explicaremos más adelante.
                        Por ejemplo, imagina que estás escribiendo un programa para calcular la suma de dos números. Necesitarás almacenar el valor de cada número en 
                        alguna parte para poder hacer los cálculos. Aquí es donde entran en juego las variables. Así que vamos a la práctica para que lo entiendas.
                    </p>
                </div>
                <div class="conf">
                    <h3>Configuración: Seleccióna una figura para representar las variables en tu ejercicio  </h3>
                    <div class="seleccion">
                        <div >
                            <input type="radio" name="leccion2">
                            <img width="60" height="60" src="https://img.icons8.com/stickers/100/open-parcel.png" alt="open-parcel"/>
                        </div>
                        <div>
                            <input type="radio" name="leccion2">
                            <img width="60" height="60" src="https://img.icons8.com/stickers/100/apple--v2.png" alt="apple--v2"/>
                        </div>
                    </div>
                </div>
                <div class="conf_ejercicio">
                    <h3>Ejercicio Guiado  </h3>
                    <div class="guiado">
                        <div>
                            <div>
                                <div>
                                    Asigna un valor numérico a las dos variable
                                </div>
                                <img width="60" height="60" src="https://img.icons8.com/stickers/100/open-parcel.png" alt="open-parcel"/>
                                <input type="number" name="leccion2">
                            </div>
                            <div>
                                <img width="60" height="60" src="https://img.icons8.com/stickers/100/open-parcel.png" alt="open-parcel"/>
                                <input type="number" name="leccion2">
                            </div>

                        </div>
                        <div class="resultado">
                            <img width="60" height="60" src="https://img.icons8.com/stickers/100/open-parcel.png" alt="open-parcel"/>
                            +
                            <img width="60" height="60" src="https://img.icons8.com/stickers/100/open-parcel.png" alt="open-parcel"/>
                            =
                            <span>48</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h3>Ejercicio: Selecciona un operador en función del resultado y jecuta la opereción</h3>
                    <div class="retroalimentacion">
                        <div class="operadores">
                            <h4>retroalimentación</h4>
                            <div>
                                <input type="radio"  name="operadores"> 
                                <label for="mas"> +</label>
                            </div>
                            <div>
                                <input type="radio" name="operadores"> 
                                <label for="menos"> -</label>
                            </div> 
                            <div>
                                <input type="radio" name="operadores"> 
                                <label for="multiplicacion"> *</label>
                            </div>
                            <div>
                                <input type="radio" name="operadores"> 
                                <label for="division"> /</label>
                            </div>   
                        </div>
                        <div class="funcion">
                            <img width="60" height="60" src="https://img.icons8.com/stickers/100/open-parcel.png" alt="open-parcel"/>
                            <span> operador </span>
                            <img width="60" height="60" src="https://img.icons8.com/stickers/100/open-parcel.png" alt="open-parcel"/>
                            <span>=</span>
                            <span>resultado</span>
                        
                            <div class="ejecutar">
                                <input class="btn btn-primary" type="button" value="Ejecutar">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boton_siguiente">
                    <input class="btn btn-primary" type="button" value="Siguiente Sección">
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
        crossorigin="anonymous"></script>
    <script src="../public/js/dashboard.js"></script>
    <script src="../public/js/lecciones.js"></script>
</body>

</html>