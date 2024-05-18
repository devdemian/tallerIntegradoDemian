<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./public/css/dashboard.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Menu Administrador</title>
    
    <style>
        .chart-container {
            background-color: white; /* Fondo blanco */
            padding: 20px;           /* Espaciado interno */
            border-radius: 8px;      /* Bordes redondeados */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Sombra suave */
            margin:  0 400px 0 400px ;
        }
    </style>
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

        <!-- Aquí agregamos el canvas para el gráfico -->
        <div class="content">
            <h2 style="text-align: center; margin: 20px">Reporte de Estudiantes</h2>
            <div class="chart-container">
                <canvas id="studentChart" width="400" height="400"></canvas>
            </div>
        </div>

    </div>

    <!-- Incluir Chart.js desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Datos de ejemplo (pueden ser pasados desde el backend)
        var data = {
            registered: 100, // Cantidad de estudiantes registrados
            approved: 75     // Cantidad de estudiantes aprobados
        };

        // Configuración del gráfico
        var ctx = document.getElementById('studentChart').getContext('2d');
        var studentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Estudiantes Registrados', 'Estudiantes Aprobados'],
                datasets: [{
                    label: 'Cantidad',
                    data: [data.registered, data.approved],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)', // Color para estudiantes registrados
                        'rgba(54, 162, 235, 0.2)'   // Color para estudiantes aprobados
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    
    <script>
        function validar(inputElement) {
            var valor = inputElement.value;
            var patron = /^[^!@#$%^&*()+{}\[\]\"\':;<>~\\/]+$/;
            if (patron.test(valor)) {
                inputElement.setCustomValidity('');
            } else {
                inputElement.setCustomValidity('El campo contiene elementos no permitidos');
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
