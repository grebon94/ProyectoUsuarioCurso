<?php 
require_once '../models/Curso.php';

class CursoController {

	public function __construct() {
		$action = (isset($_GET["action"]) ? $_GET["action"] : "all");
		if (method_exists($this, $action)) {
			$this->$action();
		} else {
			$this->error();
		}
	}

	public function all() {
		$cursos = Curso::getAll();
		include '../../public/views/cursos/index.php';
	}

	public function create() {

		if (isset($_POST["flag"])) {

			$curso = new Curso();

			$curso->grupo = $_POST["grupo"];
			$curso->programa = $_POST["programa"];
			$curso->sede = $_POST["sede"];
			$curso->horario = $_POST["horario"];
			
			$res = $curso->create();

			if ($res == 1) {
				$msg = "Curso creado exitosamente";
			} else {
				$msg = "Error al crear el curso";
			}

			$cursos = Curso::getAll();
			include '../../public/views/cursos/index.php';

		} else {
			include '../../public/views/cursos/create.php';
		}
	}

	public function update() {

		if (isset($_GET["ficha"])) {

			$ficha = $_GET["ficha"];

			$curso = Curso::findById($ficha);

			if ($curso == null) {
				$msg = "El curso no existe";
				include '../../public/views/cursos/index.php';
			} else {
				include '../../public/views/cursos/update.php';
			}
		} else {
			$curso = new Curso();
			
			$curso->ficha = $_POST["ficha"];
			$curso->grupo = $_POST["grupo"];
			$curso->programa = $_POST["programa"];
			$curso->sede = $_POST["sede"];
			$curso->horario = $_POST["horario"];
			
			$res = $curso->update();

			if ($res == 1) {
				$msg = "Curso actualizado exitosamente";
			} else {
				$msg = "Error al actualizar el curso";
			}

			$cursos = Curso::getAll();
			include '../../public/views/cursos/index.php';
		}
	}

	public function delete() {
		
		$ficha = isset($_GET["ficha"]) ? $_GET["ficha"] : 0;

		if (Curso::delete($ficha)) {
			$msg = "Eliminado correctamete";
		} else {
			$msg = "Error al eliminar";
		}

		$cursos = Curso::getAll();
		include '../../public/views/cursos/index.php';
	}

	public function error() {
		echo "No existe la función";
	}
}

new CursoController();