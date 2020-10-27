<!DOCTYPE html>
<html>
<head>
	<title>Lista de usuarios</title>
	<link rel="stylesheet" type="text/css" 
		href="../../public/css/bootstrap.min.css">
</head>
<body>
	<div>
		<?php
			if (isset($msg)) {
				echo $msg;
			}
		?>
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
				echo "<td> <a href='/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=
							update&id=".$row["id"]."'> Editar </a>
						<a href='/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=
						delete&id=".$row["id"]."'> Eliminar </a> </td>";
				echo "</tr>";
			}
			?>
		</table>
		<a href="/portafolio/proyecto-usuario-curso/app/controllers/UsuarioController.php?action=create">  Index Crear Usuario </a>
	</div>
	<script src="../../public/js/jquery-3.3.1.min.js" type="text/javascript"> </script>
	<script src="../../public/js/bootstrap.min.js" type="text/javascript"> </script>
	<?php } else { ?>
		<h3>No hay usuarios en el sistema</h3>
	<?php } ?>
</body>
</html>