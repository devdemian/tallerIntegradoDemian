
<div id="layoutSidenav_content">

    <div style="margin:80px 250px;">
        <h3 class="text-center">Registro de nuevo usuario</h3>
        <form action="../includes/validar.php" method="POST">
            <div class="row">
                <div class="col">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese Nombre" id="nombre">
                </div>
                <div class="col">
                    <label for="apellidoPat" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" placeholder="Ingrese Apellido" id="apellidoPat">
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col">
                <label for="apellidoMat" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" placeholder="Ingrese Apellido" id="apellidoMat">
            </div>
            <div class="col">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" placeholder="Ingrese Edad" id="edad">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" placeholder="Ingrese Telefono" id="direccion">
            </div>
            <div class="col">
                <label for="telefono" class="form-label">telefono</label>
                <input type="number" class="form-control" placeholder="Ingrese Correo" id="telefono">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" placeholder="Ingrese Usuario" id="usuario">
            </div>
            <div class="col">
                <label for="tipo_usuario" class="form-label">Tipo de Usuario </label>
                <input type="number" class="form-control" placeholder="Escribe el rol, 1 admin, 2 estudiante" id="tipo_usuario">
            </div>
        </div>
        <div style="padding: 20px;">
            <input type="submit" value="Guardar" class="btn btn-success" name="registrar">
            
        </div>
    </div>