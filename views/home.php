<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https: //fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/menuInicio1.css">
</head>


<body>

    <!-- Secciòn INICIO -->
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
                        <a href="#quienesSomos">Quiénes Somos</a>
                        <a href="#contacto">Contacto</a>
                    </nav>
                    <div class="d-flex justify-content-between ">
                        <form id="redes" class="m-2" method="post" action="#">
                            <input type="hidden" name="opcion" value="desplegarLogin">
                            <button class="btn btn-outline-light"><i class="fa-solid fa-user"></i> Ingresar</button>
                        </form>
                        <form id="redes2" class="m-2" method="post" action="#">
                            <input type="hidden" name="opcion" value="desplegarRegistro">
                            <button class="btn btn-outline-warning"><i class="fa-solid fa-right-to-bracket"></i> Registrate</button>
                        </form>
                    </div>

                    <!-- Icono del menu responsive  NO BORRAR-->
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <!--Iconos de redes sociales e inicio de sesion-->
                </header>

                <div class="fila">
                    <div class="col">
                        <h2>Bienvenidos a ColegaBot</h2>
                        <p>Tu plataforma de tutoriales en línea donde el aprendizaje se convierte en una experiencia colaborativa y sin límites. En ColegaBot, creemos en el poder de compartir conocimientos entre colegas para alcanzar el éxito juntos
                        </p>
                        <a href="#tutoriales"><button class="btn btn-1">Ver Tutoriales</button></a>
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
    <section id="quienesSomos" class="servicios">
        <div class="titulo">
            <h2>Nosotros</h2>
        </div>

        <div class="fila">
            <div class="col">
                <div class="card">
                    <div class="icono color1">
                        <div class="circulo">
                            <img src="./public/img/bot-quienes-somos.png" alt="">
                        </div>
                    </div>
                    <h3>Qui&eacute;nes Somos</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Nam amet necessitatibus error delectus quod quos sit
                        quaerat, ratione assumenda neque, sed deserunt asperiores
                        quia possimus? Praesentium autem iste veniam a harum,
                        cupiditate ducimus dolore quos, est tenetur omnis illo
                        sunt dolores voluptates impedit aperiam! Unde nam et enim
                        minus laudantium a rerum magni fugiat tenetur delectus
                        quod dolorum quam eos officia at, repudiandae porro,
                        provident laboriosam ipsam? Tempora enim dolorum quas
                        similique vero ipsa aperiam veritatis nemo, sed modi
                        quae cupiditate eius aliquam aliquid, iste debitis id
                        excepturi doloremque cumque possimus! Odio quas error
                        sed itaque eos delectus cumque aut.</p>

                    <!-- <a href="#">Leer Más</a> -->
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="icono color3">
                        <div class="circulo">
                            <img src="./public/img/bot-mision-vision.png" alt="">
                        </div>
                    </div>
                    <h3>Misi&oacute;n y Visi&oacute;n</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Eveniet qui possimus, fugiat quis impedit aliquam
                        veritatis sint voluptas tenetur et? Itaque nam excepturi
                        architecto eos voluptas a maiores perspiciatis expedita,
                        quod porro dolor sapiente quas dicta dolore? Labore quos
                        quae suscipit esse dignissimos! Facilis nostrum debitis
                        alias aliquid numquam. Fuga maiores consequuntur
                        perferendis quo veniam amet ab, corrupti ad repellendus!
                        Minima nemo, libero reprehenderit, nesciunt expedita
                        doloremque quod dolorum enim unde, et sapiente error
                        cumque tempore eum vel excepturi! Hic dolore sit ipsa
                        tenetur laudantium cum saepe labore quam amet magni
                        aliquam debitis eligendi corrupti nulla, expedita facilis
                        cupiditate neque.
                    </p>

                    <!-- <a href="#">Leer Más</a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- sección trabajos -->
    <section class="trabajos" id="tutoriales">
        <h2>Nuestros Tutoriales</h2>

        <!--  <nav>
            <a href="javascript:void(0)" class="borde" id="item" onclick="verCategoria('item')">Todos</a>
            <a href="javascript:void(0)" class="" id="disenio" onclick="verCategoria('disenio')">Diseño</a>
            <a href="javascript:void(0)" class="" id="programacion" onclick="verCategoria('programacion')">Programación</a>
            <a href="javascript:void(0)" class="" id="animaciones" onclick="verCategoria('animaciones')">Animaciones</a>
        </nav> -->

        <div class="galeria">
            <div class="item disenio">
                <img src="./public/img/fundamento.png" alt="">
                <div class="info">
                    <h3>Fundamento de Programación</h3>
                    <p>Con este tutorial vas aprender los <span>principios de la programación</span> 
                        los conceptos esenciales que todo programador debe conoce, 
                        aprenderas lo que es un <span>algoritmo</span>, lo que es un <span>lenguaje de programación</span> 
                        donde y como escribir tus codigos de programación,
                        aprenderas <span>variables y tipos de datos</span>, <span>depuración y pruebas</span> para poder resolver errores </p>
                    <form id="redes2" class="m-2" method="post" action="#">
                        <input type="hidden" name="opcion" value="desplegarRegistro">
                        <button class="btn btn-warning">Registrate</button>
                    </form>
                </div>
            </div>
            <div class="item programacion">
                <img src="./public/img/proximamente.png" alt="">
                <div class="info">
                    <h3>Titulo del Trabajo</h3>
                    <li style="font-size: 12px;"><span>HTML (HyperText Markup Language)</span>: Es un lenguaje de marcado que nos permite 
                        definir la estructura de una página web. Con HTML, creamos 
                        la base de la página, incluyendo títulos, párrafos, imágenes, 
                        enlaces y más. Es como el esqueleto de una página web</li>
                    <li style="font-size: 12px;"><span>CSS (Cascading Style Sheets)</span> es un 
                    lenguaje informático que se utiliza para dar formato y estilo a las páginas web.
                     Trabaja en conjunto con el HTML (Hypertext Markup Language) para definir cómo 
                     se presentan los documentos en un navegador web.
                    </li>
                    <a href="#">proximamente</a>
                </div>
            </div>
            
        </div>
    </section>


    <!-- sección habilidades -->
    <!-- <section class="curso" id="curso">
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
    </section> -->



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

    <section>
        <div id="tool">
            <!-- html del boton flotante -->
            <a href="#" class="btn-wsp hero__cta">
                <img src="./public/img/logoBot.png" alt="">
            </a>
            <span id="toolpin">Preguntas Frecuentes</span>
        </div>
    </section>
    <section class="modal ">
        <div class="modal__container">
            <img src="./public/img/pregunta-respuesta.png" class="modal__img">
            <div id="principal" class=" container-sm bg-light" style="max-width: 800px;">
                
                <div class="accordion" id="accordionExample">
    
    
                    <div class="accordion-item my-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="bi bi-truck-flatbed"></i>
                                <span class="px-3 text-info">Envios</span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                            </div>
                        </div>
                    </div>
    
                    <!-- La segunda Categoria  -->
    
                    <div class="accordion-item my-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-credit-card"></i>
                                <span class="px-3 text-info">Pagos</span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                            </div>
                        </div>
                    </div>
    
                    <!-- La tercera categoria  -->
    
                    <div class="accordion-item my-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    
                                <i class="bi bi-arrow-return-left"></i>
                                <span class="px-3 text-info">Devoluciones</span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                            </div>
                        </div>
                    </div>
    
                    <!-- La cuarta categoria  -->
    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                <i class="bi bi-percent"></i>
                                <span class="px-3 text-info">Promociones</span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h2 class="fs-6 fw-semibold">1. ¿Dónde está mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">2. ¿Cúando llegará mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">3. ¿Qué hacer si no llega mi pedido?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">4. ¿Cómo sigo el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                                <h2 class="fs-6 fw-semibold">5. ¿Cúanto tiempo se demora el envio?</h2>
                                <div class="my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, odit.</div>
                            </div>
                        </div>
                    </div>
    
    
                </div>
            </div>
            <a href="#" class="modal__close">Cerrar </a>
    </section>


    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Todos los Derechos Reservados / Colega Bot</div>
                    <div>
                        <a href="#">Politica de Privacidad</a>
                        &middot;
                        <a href="#">Terminos &amp; Condiciones</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="./public/js/app.js"></script>
    <?php
    if (isset($textoContactList)) {
        echo "<script >alert(\"$textoContactList\");</script>";
    }
    ?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" integrity="sha512-DHNepbIus9t4e6YoMBSJLwl+nnm0tIwMBonsQQ+W9NKN6gVVVbomJs9Ii3mQ+HzGZiU5FyJLdnAz9a63ZgZvTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./public/js/quienesSomos.js"></script>
</body>

</html>