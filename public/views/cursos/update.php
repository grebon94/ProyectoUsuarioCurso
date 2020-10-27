<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Actualizar curso</title>
</head>
<body>    
    <?php $curso = $curso->fetch_assoc(); ?>
    <h1> Formulario - Actualizar nuevo curso </h1>
    <form action="/portafolio/proyecto-usuario-curso/app/controllers/CursoController.php?action=update" method="post">

        <input type="hidden" name="ficha" value="<?php echo $curso["ficha"]; ?>">

        <label for="grupo">Grupo: </label>
        <input type="text" name="grupo" id="grupo" value="<?php echo $curso["grupo"]; ?>"><br>

        <label for="programa">Programa: </label>
        <input type="text" name="programa" id="programa" value="<?php echo $curso["programa"]; ?>"><br>

        <label for="sede">Sede: </label>
        <input type="text" name="sede" id="sede" value="<?php echo $curso["sede"]; ?>"><br>

        <label for="horario">Horario: </label>
        <input type="text" name="horario" id="horario" value="<?php echo $curso["horario"]; ?>"><br>
        
        <button type="submit">Enviar</button>
    </form>    
</body>
</html>