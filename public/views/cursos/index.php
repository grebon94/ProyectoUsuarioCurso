<!DOCTYPE html>
<html>
<head>
	<title>Lista de cursos</title>
	<link rel="stylesheet" type="text/css" href="/portafolio/proyecto-usuario-curso/public/css/bootstrap.min.css">
</head>
<body>
	<?php if (isset($msg)) { ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong> <?php echo $msg; } ?> </strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	<?php if ($cursos != null) { ?>
	<div class="container">
		<h2 align="center"> Cursos del sistema </h2>
		<table class="table">
			<tr>
				<thead class="thead-dark">
					<th>Ficha</th>
					<th>Grupo</th>
					<th>Programa</th>
					<th>Sede</th>
					<th>Horario</th>
					<th>Acciones</th>
				</thead>
			</tr>
			<?php 
			while ($row = $cursos->fetch_assoc()) {
				echo "<tr>";
						echo "<td>" . $row["ficha"] . "</td>";
						echo "<td>" . $row["grupo"] . "</td>";
						echo "<td>" . $row["programa"] . "</td>";
						echo "<td>" . $row["sede"] . "</td>";
						echo "<td>" . $row["horario"] . "</td>";
						echo "<td> <a class='btn btn-warning'
						href='/portafolio/proyecto-usuario-curso/app/controllers/CursoController.php?action=
						update&ficha=".$row["ficha"]."' role='button'> Editar </a>
							<a class='btn btn-danger'
							href='/portafolio/proyecto-usuario-curso/app/controllers/CursoController.php?action=
							delete&ficha=".$row["ficha"]."' role='button'> Eliminar </a> </td>";
				echo "</tr>";
			}
			?>
		</table>
		<a class="btn btn-primary btn-block" href="/portafolio/proyecto-usuario-curso/app/controllers/CursoController.php?action=create" role="button">Crear Usuario</a>
		<br>
		<a class="btn btn-secondary btn-block" href="/portafolio/proyecto-usuario-curso/indexIni.php" role="button">Inicio</a>
	</div>
	<script src="/portafolio/proyecto-usuario-curso/public/js/jquery-3.5.1.min.js" type="text/javascript" > </script>
	<script src="/portafolio/proyecto-usuario-curso/public/js/bootstrap.min.js" type="text/javascript"> </script>
	<?php } else { ?>
		<h3>No hay cursos en el sistema</h3>
	<?php } ?>
</body>
</html>