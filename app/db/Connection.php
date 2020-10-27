<?php

require_once '../config/db.php';

class Connection {

	private $con;

	public function __construct() {
		$this->con = new mysqli(HOST, USER, PASS, DB);
		$this->con->set_charset("utf8");
		return $this->con;
	}

	public function close() {
		$this->con->close();
	}

	public function execute($sql) {
		$exec = $this->con->query($sql);
		if ($exec == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function query($sql) {
		$query = $this->con->query($sql);
		if ($query->num_rows > 0) {
			return $query;
		} else {
			return null;
		}
	}
}