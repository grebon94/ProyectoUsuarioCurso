<?php 
require_once '../db/Connection.php';

class Curso {
	
	public $ficha;
	public $grupo;
	public $programa;
	public $sede;
	public $horario;

	public static function getAll() {
		$sql = "select * from cursos";
		$con = new Connection();
		$res = $con->query($sql);
		$con->close();
		return $res;
	}

	public static function findById($ficha) {
		$sql = "select * from cursos where ficha='$ficha'";
		$con = new Connection();
		$res = $con->query($sql);
		$con->close();
		return $res;
	}

	public function create() {
		$insert = "insert into cursos values (0,'$this->grupo','$this->programa','$this->sede','$this->horario')";
		$con = new Connection();
		$res = $con->execute($insert);
		$con->close();
		return $res;
	}

	public static function delete($ficha) {
		$delete = "delete from cursos where ficha='$ficha'";
		$con = new Connection();
		$res = $con->execute($delete);
		$con->close();
		return $res;
	}

	public function update() {
		$update = "update cursos set grupo='$this->grupo',programa='$this->programa',sede='$this->sede',
		horario='$this->horario' where ficha='$this->ficha'";
		$con = new Connection();
		$res = $con->execute($update);
		$con->close();
		return $res;
	}
}