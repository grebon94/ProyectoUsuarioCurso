<?php 

require_once 'Connection.php';

$con = new Connection();

$sql = "select * from usuarios";
$res = $con->query($sql);

$insert = "insert into usuarios values (3, 'Julian Gomez', 'julian@gmail.com', '312313564', 'Cra 12')";

$res = $con->execute($insert);

if ($res) {
	echo "Insertado";
} else {
	echo "Error";
}

echo "<pre>";
print_r($res);