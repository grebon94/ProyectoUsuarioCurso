<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Crear curso</title>
    <link rel="stylesheet" type="text/css" href="/portafolio/proyecto-usuario-curso/public/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Crear curso</h1>
        <form action="/portafolio/proyecto-usuario-curso/app/controllers/CursoController.php?action=create" method="post">

        <input type="hidden" name="flag" value="create">

        <div class="form-group">
            <label for="grupo">Grupo</label>
            <input type="text" class="form-control" id="grupo" name="grupo">
        </div>

        <div class="form-group">
            <label for="programa">Programa</label>
            <input type="text" class="form-control" id="programa" name="programa">
        </div>

        <div class="form-group">
            <label for="sede">Sede</label>
            <input type="text" class="form-control" id="sede" name="sede">
        </div>

        <div class="form-group">
            <label for="horario">Horario</label>
            <input type="text" class="form-control" id="horario" name="horario">
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