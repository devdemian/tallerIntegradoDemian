<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./public/css/estudiantes.css">
    <link rel="stylesheet" href="./public/css/dashboard1.css" />

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
                    <img src="./public/img/logoColegaBot2.png" alt="" />
                </div>

            </div>
            <div class="nav">
                <div class="menu">
                    <p class="title">Menu</p>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-house-simple"></i>
                                <span class="text">Inicio </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon ph-bold ph-user"></i>
                                <span class="text">Secciones</span>
                                <i class="arrow ph-bold ph-caret-down"></i>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="../views/drop.php">
                                        <span class="text">Lección 1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Lección 2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Lección 3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Lección 4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Lección 5</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="text">Lección 6</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="#">
                                <i class="icon ph-bold ph-file-text"></i>
                                <span class="text">Mensajes</span>
                            </a>
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
                        <a href="../views//logout.php">
                            <i class="icon ph-bold ph-sign-out"></i>
                            <span class="text">Cerrar Sesión</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="credits">
            <div class="titulo">
    <h1>Segun lo Estudiado!! Sobre que se Trata el Tutorial</h1>

</div>
<div class="contenedor">
    <div class="fondo-drop">
        <div class="drop">
            <!--ondragstart: especifico que debe suceder cuando se arrastra el elemento 
                draggable: indico que el elemento se podra arrastrar -->
            <img src="./public/img/html-5.png" alt="" draggable="true" ondragstart="drag(event)" id="html">
            <img src="./public/img/programacion.png" alt="" draggable="true" ondragstart="drag(event)" id="fundamento">
            <img src="./public/img/php.png" alt="" draggable="true" ondragstart="drag(event)" id="mysql">
        </div>

        <div class="drop">
            <div class="figura">
                <!--ondrop: especifico que sucede cuando se suelta un elemento 
                    ondeagover: especifico donde se puedem soltar los datos arrastrados-->
                <div class="box" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                <h2>fundamento</h2>
            </div>

            <!-- <div class="figura">
                    ondrop: especifico que sucede cuando se suelta un elemento 
                    ondeagover: especifico donde se puedem soltar los datos arrastrados
                    <div class="box" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <h2>php</h2>
                </div>
                <div class="figura">
                    ondrop: especifico que sucede cuando se suelta un elemento 
                    ondeagover: especifico donde se puedem soltar los datos arrastrados
                    <div class="box" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
                    <h2>Html</h2>
                </div>  -->
        </div>
    </div>
</div>
      </div>
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
    <script src="../public/js/dashboard.js"></script>
    <script src="../public/js/app3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

