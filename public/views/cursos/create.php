<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Crear curso</title>
</head>
<body>
    <h1>Formulario - Crear nuevo curso</h1>
    <form action="/portafolio/proyecto-usuario-curso/app/controllers/CursoController.php?action=create" method="post">

        <input type="hidden" name="flag" value="create">

        <label for="grupo">Grupo: </label>
        <input type="text" name="grupo" id="grupo"><br>

        <label for="programa">Programa: </label>
        <input type="text" name="programa" id="programa"><br>

        <label for="sede">Sede: </label>
        <input type="text" name="sede" id="sede"><br>
        
        <label for="horario">Horario: </label>
        <input type="text" name="horario" id="horario"><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>