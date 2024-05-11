<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro colega bot</title>
    <link rel="stylesheet" href="./public/css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <a href="index.php"><img src="./public/img/cerrar.png" alt=""></a>
                                    <a href="./index.php">
                                        <img class="rounded mx-auto d-block" src="./public/img/bot1.png" alt="" height="60px">
                                    </a>
                                    <h3 class="text-center font-weight-light my-4">Registrate</h3>
                                </div>
                                <div class="card-body">

                                    <?php
                                    if (isset($texto)) {
                                        echo "
                                        <div class='alert alert-info' role='alert'>
                                            $texto
                                        </div>";
                                    } elseif (isset($textoRegistro)) {
                                        echo "
                                        <div class='alert alert-info' role='alert'>
                                            $textoRegistro
                                        </div>";
                                    }
                                    ?>

                                    <form method="POST" action="#">
                                        <div class="row m-2">
                                            <div class="col">
                                                <label for="rut" class="form-label">Rut</label>
                                                <input type="text" class="form-control" name="rut" id="Rut" required onChange="validar(this)">
                                            </div>
                                            <div class="col">
                                                <label for="nombre" class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" id="nombre" required onChange="validar(this)">
                                            </div>
                                        </div>
                                        <div class="row m-2">
                                            <div class="col">
                                                <label for="apellidoPat" class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" name="apellidop" id="apellidop" required onChange="validar(this)">
                                            </div>
                                            <div class="col">
                                                <label for="apellidoMat" class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" name="apellidom" id="apellidom" required onChange="validar(this)">
                                            </div>
                                        </div>
                                        <div class="row m-2">
                                            <div class="col">
                                                <label for="edad" class="form-label">Edad</label>
                                                <input type="number" class="form-control" name="edad" id="edad" required onChange="validar(this)">
                                            </div>
                                            <div class="col">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" id="direccion">
                                            </div>
                                        </div>
                                        <div class="row m-2">
                                            <div class="col">
                                                <label for="telefono" class="form-label">telefono</label>
                                                <input type="phone" class="form-control" name="telefono" id="telefono">
                                            </div>

                                        </div>

                                        <div style="padding: 20px;">
                                            <input type="hidden" name="opcion" value="newRegistroExterno">
                                            <button type="submit" class="btn btn-primary ">Registrate</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.html">Iniciar Sesión</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <div id="layoutAuthentication_footer" style="margin-top: 30px;">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./public/js/scripts.js"></script>
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
    <?php
if (isset($textoContactList)) {
    // Mostrar la alerta utilizando SweetAlert2
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
    Swal.fire({
        title: 'Registro Exitoso',
        text: '$textoContactList',
        }).then(() => {
            // Redirigir a otra vista después de cerrar la alerta
            window.location.href = './index.php';
        });
    </script>
    ";
}
?>

</body>

</html>