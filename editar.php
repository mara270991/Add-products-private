<?php

$dsn = "mysql:host=localhost;dbname=private;port=3306";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$base = new PDO($dsn, 'root', '', $opt);

$id = intval($_POST['id']);
$marca = $_POST['marca'];
$talle = $_POST['talle'];
$color = $_POST['color'];
$preciov  = $_POST['precioventa'];
$preciol = $_POST['preciolista'];
$precioc = $_POST['preciocosto'];
$observaciones = $_POST['observaciones'];

if($id_autor == 0) {
	$id_autor = null;
}

//acá puedo hacer las validaciones necesarias antes de la query

try {
	$consulta = $base->prepare("UPDATE products set marca=?, talle=?, color=?, precioventa=?, preciolista=?, preciocosto=?, observaciones=? WHERE id=?");

	//con execute cortito
	$consulta->execute([$marca, $talle, $color, $preciov, $preciol, $precioc, $observaciones, $id]);

} catch(PDOException $error) {

	echo("Ocurrió un error al editar ");
	die();
}

header('Location: products.php');
