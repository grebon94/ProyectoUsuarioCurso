<?php 
require_once '../db/Connection.php';
class Usuario {

	public $id;
	public $nombre;
	public $correo;
	public $telefono;
	public $direccion;

	public static function getAll() {
		$sql = "select * from usuarios";
		$con = new Connection();
		$res = $con->query($sql);
		$con->close();
		return $res;
	}

	public static function findById($id) {
		$sql = "select * from usuarios where id = '$id'";
		$con = new Connection();
		$res = $con->query($sql);
		$con->close();
		return $res;
	}

	public function create() {
		$insert = "insert into usuarios values (0,'$this->nombre','$this->correo','$this->telefono','$this->direccion')";
		$con = new Connection();
		$res = $con->execute($insert);
		$con->close();
		return $res;
	}

	public static function delete($id) {
		$delete = "delete from usuarios where id = '$id'";
		$con = new Connection();
		$res = $con->execute($delete);
		$con->close();
		return $res;
	}

	public function update() {
		$update = "update usuarios set nombre='$this->nombre',email='$this->correo',telefono='$this->telefono',
		direccion='$this->direccion' where id='$this->id'";
		$con = new Connection();
		$res = $con->execute($update);
		$con->close();
		return $res;
	}
}

// $usuarios = Usuario::getAll();

// while ($row = $usuarios->fetch_assoc()) {
// 	echo $row["nombre"] . " - " . $row["correo"] . "<br>";
// }


// $usuario = Usuario::findById(3);

// print_r($usuario->fetch_assoc());