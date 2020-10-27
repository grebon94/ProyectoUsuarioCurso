<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Actualizar usuario</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
</head>
<body>
    <?php $usuario = $usuario->fetch_assoc(); ?>

    <div class="container">
        <h1>Actualizar usuario</h1>
        <form action="/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=update" method="post">

        <input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario["nombre"]; ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Correo electrónico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="correo" value="<?php echo $usuario["email"]; ?>">
            <small id="emailHelp" class="form-text text-muted">No compartiremos tu email con alguien más</small>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $usuario["telefono"]; ?>">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $usuario["direccion"]; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
        <br>
        <a class="btn btn-secondary btn-block" href="/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php" role="button">Cancelar</a>
    </div>
	<script src="../../public/js/jquery-3.3.1.min.js" type="text/javascript"> </script>
	<script src="../../public/js/bootstrap.min.js" type="text/javascript"> </script>
</body>
</html>