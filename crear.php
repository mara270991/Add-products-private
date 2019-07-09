<?php

$dsn = "mysql:host=localhost;dbname=private;port=3306";
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

$base = new PDO($dsn, 'root', '', $opt);

$marca = $_POST['marca'];
$talle = $_POST['talle'];
$color = $_POST['color'];
$preciov  = $_POST['precioventa'];
$preciol = $_POST['preciolista'];
$precioc = $_POST['preciocosto'];
$observaciones = $_POST['observaciones'];

//acá puedo hacer las validaciones necesarias antes de la query


	// $base->query("insert into products (marca, talle, color, precio-venta, precio-lista, precio-costo, observaciones) values ('$marca', '$talle', '$color', '$preciov', '$preciol', '$precioc', '$observaciones')"); //corre la consulta y me devuelve un resultado dentro de un objeto hijo pdo

	$consulta = $base->prepare("insert into products (marca, talle, color, precioventa, preciolista, preciocosto, observaciones) values (?, ?, ?, ?, ?, ?, ?)");
	$consulta->execute([$marca, $talle, $color, $preciov, $preciol, $precioc, $observaciones]);



header('Location: index.php');
