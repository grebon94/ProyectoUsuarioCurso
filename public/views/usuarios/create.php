<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Crear usuario</title>
</head>
<body>

    <h1>Formulario - Crear nuevo usuario</h1>

    <form action="/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=create" method="post">

        <input type="hidden" name="flag" value="create">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br>

        <label for="correo">Email: </label>
        <input type="email" name="correo" id="correo"><br>

        <label for="tel">Teléfono: </label>
        <input type="number" name="telefono" id="tel"><br>

        <label for="dir">Dirección: </label>
        <input type="text" name="direccion" id="dir"><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>