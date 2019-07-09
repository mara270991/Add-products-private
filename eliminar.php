<?php
$dsn = "mysql:host=localhost;dbname=private;port=3306";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$base = new PDO($dsn, 'root', '', $opt);

$id = intval($_GET['id']);

//acá puedo hacer las validaciones necesarias antes de la query

try {
	$base->query("delete from products where id = $id");

} catch(PDOException $error) {

	echo("Ocurrió un error al eliminar ");
	die();
}

header('Location: index.php');
