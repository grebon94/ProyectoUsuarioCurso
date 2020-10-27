<!DOCTYPE html>
<html>
<head>
	<title>Lista de usuarios</title>
	<link rel="stylesheet" type="text/css" href="/portafolio/proyecto-usuario-curso/public/css/bootstrap.min.css">
</head>
<body>
	<?php if (isset($msg)) { ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>  <?php echo $msg; } ?> </strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	<?php if ($usuarios != null) { ?>

	<div class="container">
		<h2 align="center"> Usuarios del sistema </h2>
		<table class="table">
			<tr>
				<thead class="thead-dark">
					<th>Id</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Teléfono</th>
					<th>Dirección</th>
					<th>Acciones</th>
				</thead>
			</tr>
			<?php 
			while ($row = $usuarios->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["id"] . "</td>";
				echo "<td>" . $row["nombre"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["telefono"] . "</td>";
				echo "<td>" . $row["direccion"] . "</td>";
				echo "<td> <a class='btn btn-warning' href='/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=
							update&id=".$row["id"]."' role='button'> Editar </a>
						<a class='btn btn-danger' href='/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=
						delete&id=".$row["id"]."' role='button'> Eliminar </a> </td>";
				echo "</tr>";
			}
			?>
		</table>
			<a class="btn btn-primary btn-block" href="/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=
			create" role="button">
				Crear usuario
			</a>
		<br>
		<a class="btn btn-secondary btn-block" href="/portafolio/proyecto-usuario-curso/indexIni.php" role="button">Inicio</a>
	</div>
	<script src="/portafolio/proyecto-usuario-curso/public/js/jquery-3.5.1.min.js" type="text/javascript" > </script>
	<script src="/portafolio/proyecto-usuario-curso/public/js/bootstrap.min.js" type="text/javascript"> </script>
	<?php } else { ?>
		<h3>No hay usuarios en el sistema</h3>
	<?php } ?>
</body>
</html>