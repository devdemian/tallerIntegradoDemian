<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" integrity="sha512-DHNepbIus9t4e6YoMBSJLwl+nnm0tIwMBonsQQ+W9NKN6gVVVbomJs9Ii3mQ+HzGZiU5FyJLdnAz9a63ZgZvTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https: //fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/menuInicio.css">
</head>


<body>

    <!-- Secciòn inicio -->
    <span class="sombra">
        <section id="inicio" class="inicio">
            <div class="contenido">
                <header>
                    <div class="logo">
                        <img src="./public/img/logoColegaBot2.png" alt="logo colegaBot">
                    </div>
                    <!--barra de navegacion del menu-->
                    <nav id="nav" class="">
                        <a href="#inicio">Inicio</a>
                        <a href="#servicios">Servicios</a>
                        <a href="#trabajos">Tutoriales</a>
                        <a href="#curso">Estimulo</a>
                        <a href="#contacto">Contacto</a>
                    </nav>

                    <!-- Icono del menu responsive  NO BORRAR-->
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <!--Iconos de redes sociales e inicio de sesion-->
                    <div class="redes">
                        <form method="post" action="#">
                            <input type="hidden" name="opcion" value="desplegarLogin">
                            <button class="btn btn-primary">Ingresar</button>
                        </form>
                    </div>
                </header>

                <div class="fila">
                    <div class="col">
                        <h2>Bienvenidos a ColegaBot</h2>
                        <p>Tu plataforma de tutoriales en línea donde el aprendizaje se convierte en una experiencia colaborativa y sin límites. En ColegaBot, creemos en el poder de compartir conocimientos entre colegas para alcanzar el éxito juntos
                        </p>
                        <a href="#trabajos"><button class="btn btn-1">Ir a Tutoriales</button></a>
                    </div>
                    <div class="col">
                        <div class="contenedor-img">
                            <img src="./public/img/bot1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </span>

    <!-- sección SERVICIOS -->
    <section id="servicios" class="servicios">
        <div class="titulo">
            <h2>Nuestros Servicios</h2>
        </div>
        <div class="fila">
            <div class="col">
                <div class="card">
                    <div class="icono color1">
                        <div class="circulo">
                            <i class="fa-solid fa-code"></i>
                        </div>
                    </div>
                    <h3>Diseño Web</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta inventore neque ducimus cupiditate, placeat incidunt culpa quis quod distinctio.</p>

                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="icono color2">
                        <div class="circulo">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                    </div>
                    <h3>Diseño Gráfico</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta inventore neque ducimus cupiditate, placeat incidunt culpa quis quod distinctio.</p>

                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="icono color3">
                        <div class="circulo">
                            <i class="fa-solid fa-video"></i>
                        </div>
                    </div>
                    <h3>Animaciones</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta inventore neque ducimus cupiditate, placeat incidunt culpa quis quod distinctio.</p>

                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="col">
                <div class="card">
                    <div class="icono color1">
                        <div class="circulo">
                            <i class="fa-solid fa-bullhorn"></i>
                        </div>
                    </div>
                    <h3>Marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta inventore neque ducimus cupiditate, placeat incidunt culpa quis quod distinctio.</p>

                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="icono color2">
                        <div class="circulo">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </div>
                    <h3>Soporte Clientes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta inventore neque ducimus cupiditate, placeat incidunt culpa quis quod distinctio.</p>

                    <a href="#">Leer Más</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="icono color3">
                        <div class="circulo">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <h3>Tiendas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta inventore neque ducimus cupiditate, placeat incidunt culpa quis quod distinctio.</p>

                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- sección trabajos -->
    <section class="trabajos" id="trabajos">
        <h2>Nuestros Tutoriales</h2>

        <nav>
            <a href="javascript:void(0)" class="borde" id="item" onclick="verCategoria('item')">Todos</a>
            <a href="javascript:void(0)" class="" id="disenio" onclick="verCategoria('disenio')">Diseño</a>
            <a href="javascript:void(0)" class="" id="programacion" onclick="verCategoria('programacion')">Programación</a>
            <a href="javascript:void(0)" class="" id="animaciones" onclick="verCategoria('animaciones')">Animaciones</a>
        </nav>

        <div class="galeria">
            <div class="item disenio">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item programacion">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item animaciones">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item disenio">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item animaciones">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item programacion">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item disenio">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item programacion">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
            <div class="item programacion">
                <img src="./public/img/bot1.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Voluptatibus nam, similique ut obcaecati ipsa sit excepturi
                        libero illo reprehenderit blanditiis.
                    </p>
                    <a href="#">Ver Trabajo</a>
                </div>
            </div>
        </div>
    </section>
    <!-- sección habilidades -->
    <section class="curso" id="curso">
        <div class="contenedor-habi">
            <h2>Estimulo</h2>
            <div class="fila">
                <div class="col">
                    <div class="score">
                        <div class="box">
                            <div class="chart" data-percent="95">
                                95%
                            </div>
                            <h3>HTML & CSS</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="score">
                        <div class="box">
                            <div class="chart" data-percent="90">
                                90%
                            </div>
                            <h3>BOOSTRAP</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="score">
                        <div class="box">
                            <div class="chart" data-percent="85">
                                85%
                            </div>
                            <h3>JAVASCRIPT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <div class="score">
                        <div class="box">
                            <div class="chart" data-percent="70">
                                70%
                            </div>
                            <h3>MYSQL</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="score">
                        <div class="box">
                            <div class="chart" data-percent="90">
                                90%
                            </div>
                            <h3>PHP</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="score">
                        <div class="box">
                            <div class="chart" data-percent="90">
                                90%
                            </div>
                            <h3>PHOTOSHOP</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- sección contacto -->
    <section class="contacto" id="contacto">
        <div class="contenedor-contacto">
            <h2>Contacto</h2>
            <div class="fila">
                <div class="col">
                    <div class="info">
                        <h3>Correo:</h3>
                        <p>Contacto@colegabot.cl</p>
                    </div>
                    <div class="info">
                        <h3>Teléfono:</h3>
                        <p>+569 123 45 789</p>
                    </div>
                    <div class="info">
                        <h3>País</h3>
                        <p>Chile</p>
                    </div>
                    <div class="info">
                        <h3>Ciudad:</h3>
                        <p>Santiago / El monte</p>
                    </div>
                </div>
                <div class="col">
                
                <form method="POST" action="#">
                        <input type="text" placeholder="Nombre..." name="nombre" id="nombre" maxlength="20" pattern="[A-Za-z\s]+" required>
                        <input type="text" placeholder="Apellido..." name="apellido" id="apellido" maxlength="20" pattern="[A-Za-z\s]+" required>
                        <input type="email" placeholder="Correo..." name="email" id="correo" maxlength="50" required>
                        <input type="text" placeholder="Telefono...(opcional)" name="telefono" id="telefono" maxlength="20" oninput="validarTelefono(this)" required>
                        <textarea id="mensaje" cols="30" rows="10" placeholder="Mensaje" name="mensaje" maxlength="225" required></textarea>
                        <input type="hidden" name="opcion" value="contactList">
                        <input type="submit" value="Enviar" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>Creado por Colega Bot - 2024 - Taller Integración</p>
    </footer>
    <script src="./public/js/app.js"></script>
<?php
    if(isset($textoContactList)){
        echo "<script >alert(\"$textoContactList\");</script>";
    }
?>

</body>

</html>