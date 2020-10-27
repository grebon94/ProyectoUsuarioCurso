<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Actualizar curso</title>
    <link rel="stylesheet" type="text/css" href="/portafolio/proyecto-usuario-curso/public/css/bootstrap.min.css">
</head>
<body>    
    <?php $curso = $curso->fetch_assoc(); ?>

    <div class="container">
        <h1>Actualizar curso</h1>
        <form action="/portafolio/proyecto-usuario-curso/app/controllers/CursoController.php?action=update" method="post">

        <input type="hidden" name="ficha" value="<?php echo $curso["ficha"]; ?>">

        <div class="form-group">
            <label for="grupo">Grupo</label>
            <input type="text" class="form-control" id="grupo" name="grupo" value="<?php echo $curso["grupo"]; ?>">
        </div>

        <div class="form-group">
            <label for="programa">Programa</label>
            <input type="text" class="form-control" id="programa" name="programa" value="<?php echo $curso["programa"]; ?>">
        </div>

        <div class="form-group">
            <label for="sede">Sede</label>
            <input type="text" class="form-control" id="sede" name="sede" value="<?php echo $curso["sede"]; ?>">
        </div>

        <div class="form-group">
            <label for="horario">Horario</label>
            <input type="text" class="form-control" id="horario" name="horario" value="<?php echo $curso["horario"]; ?>">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
        <br>
        <a class="btn btn-secondary btn-block" href="/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php" role="button">Cancelar</a>
    </div>
	<script src="/portafolio/proyecto-usuario-curso/public/js/jquery-3.5.1.min.js" type="text/javascript" > </script>
	<script src="/portafolio/proyecto-usuario-curso/public/js/bootstrap.min.js" type="text/javascript"> </script>
</body>
</html>