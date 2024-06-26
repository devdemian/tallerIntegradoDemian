<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>login colega bot</title>
    <link rel="stylesheet" href="./public/css/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <a href="index.php"><img src="./public/img/cerrar.png" alt=""></a>
                                    <a href="./index.php">
                                        <img class="rounded mx-auto d-block" src="./public/img/bot1.png" alt="" height="60px">
                                    </a>
                                    <h3 class="text-center font-weight-light my-4">Inicia Sesión</h3>
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
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Usuario</label>
                                            <input class="form-control py-4" id="inputEmailAddress" name="usuario" type="text" placeholder="Ingresa tu Rut" required onChange="validar(this)" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Contraseña</label>
                                            <input class="form-control py-4" id="inputPassword" name="pass" type="password" placeholder="Ingresa Contraseña" required onChange="validar(this)" />
                                        </div>
                                        <div class="card-footer text-center">
                                            <input type="hidden" name="opcion" value="login">
                                            <button type="submit" class="btn btn-primary">Entrar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <form method="post" action="#">
                                        <input type="hidden" name="opcion" value="desplegarRegistro">
                                        <button class="btn btn-primary">Eres Nuevo en ColegaBot? Crea Una Cuenta</button>
                                    </form>
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
</body>

</html>