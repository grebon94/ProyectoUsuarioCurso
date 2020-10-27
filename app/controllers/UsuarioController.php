<?php 
require_once '../models/Usuario.php';
class UsuarioController {

	public function __construct() {
		$action = (isset($_GET["action"]) ? $_GET["action"] : "all");
		if (method_exists($this, $action)) {
			$this->$action();
		} else {
			$this->error();
		}
	}

	public function all() {
		$usuarios = Usuario::getAll();
		include '../../public/views/usuarios/index.php';
	}

	public function create() {

		if (isset($_POST["flag"])) {

			$usuario = new Usuario();

			$usuario->nombre = $_POST["nombre"];
			$usuario->correo = $_POST["correo"];
			$usuario->telefono = $_POST["telefono"];
			$usuario->direccion = $_POST["direccion"];

			$res = $usuario->create();

			if ($res) {
				$msg = "Usuario creado exitosamente";
			} else {
				$msg = "Error al crear el usuario";
			}

			$usuarios = Usuario::getAll();
			include '../../public/views/usuarios/index.php';

		} else {
			include '../../public/views/usuarios/create.php';
		}
	}

	public function update() {

		if (isset($_GET["id"])) {

			$id = $_GET["id"];

			$usuario = Usuario::findById($id);

			if ($usuario == null) {
				$msg = "El usuario no existe";
				include '../../public/views/usuarios/index.php';
			} else {
				include '../../public/views/usuarios/update.php';
			}
		} else {

			$usuario = new Usuario();
			
			$usuario->id = $_POST["id"];
			$usuario->nombre = $_POST["nombre"];
			$usuario->correo = $_POST["correo"];
			$usuario->telefono = $_POST["telefono"];
			$usuario->direccion = $_POST["direccion"];
			
			$res = $usuario->update();

			if ($res == 1) {
				$msg = "Usuario actualizado exitosamente";
			} else {
				$msg = "Error al actualizar el usuario";
			}

			$usuarios = Usuario::getAll();
			include '../../public/views/usuarios/index.php';
		}
	}

	public function delete() {

		$id = isset($_GET["id"]) ? $_GET["id"] : 0;

		if (Usuario::delete($id)) {
			$msg = "Eliminado correctamete";
		} else {
			$msg = "Error al eliminar";
		}

		$usuarios = Usuario::getAll();
		include '../../public/views/usuarios/index.php';
	}

	public function error() {
		echo "No existe la función";
	}
}

new UsuarioController();