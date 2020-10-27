<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Actualizar usuario</title>
</head>
<body>    
    <?php $usuario = $usuario->fetch_assoc(); ?>
    <h1> Formulario - Actualizar nuevo usuario </h1>    
    <form action="/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=update" method="post">

        <input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $usuario["nombre"]; ?>"><br>

        <label for="correo">Email: </label>
        <input type="email" name="correo" id="correo" value="<?php echo $usuario["email"]; ?>"><br>

        <label for="tel">Teléfono: </label>
        <input type="number" name="telefono" id="tel" value="<?php echo $usuario["telefono"]; ?>"><br>

        <label for="dir">Dirección: </label>
        <input type="text" name="direccion" id="dir" value="<?php echo $usuario["direccion"]; ?>"><br>
        
        <button type="submit">Enviar</button>
    </form>    
</body>
</html>