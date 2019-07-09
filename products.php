<?php
require_once 'conexion.php';

try {
	$resultado = $base->query("SELECT * from products"); //corre la consulta y me devuelve un resultado dentro de un objeto hijo pdo

	//equivalente a la línea de arriba pero usando statements
	// $resultado = $base->prepare("SELECT * from autores");
	// $resultado->execute();

} catch(PDOException $error) {
	$mensaje = $error->getMessage(); //string descriptiva del error
	$codigo = $error->getCode(); //codigo tipificado del error

	echo("Ocurrió un error con una consulta en la base de datos");
	die(); //lo mismo que exit()
}


$products = $resultado->fetchAll(PDO::FETCH_ASSOC); //me convierte el "resultado pdo" en un array de arrays asociativos de php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Productos Private </title>
	<meta charset="utf-8">
	<style type="text/css">
		body { font-family: sans-serif; font-size:15px; }
		article { margin:0 10px; margin-bottom:20px; display:inline-block; vertical-align:top; width:20%; padding:10px; background-color:#eee; }
		div { margin-bottom:5px; }
	</style>
</head>
<body>
	<h1>Productos</h1>
	<div>
		<a href="formulario.php">CREAR NUEVO</a>
	</div>
	<?php foreach($products as $product) { ?>
		<article>
			<div>
				<label>Marca:</label> <strong><?php echo $product['marca'] ?></strong>
			</div>
			<div>
				<label>Talle:</label> <strong><?php echo $product['talle'] ?></strong>
			</div>
			<div>
				<label>Color:</label> <strong><?php echo $product['color'] ?></strong>
			</div>
			<div>
				<label>Precio Venta:</label> <strong><?php echo '$' . $product['precioventa'] ?></strong>
			</div>
			<div>
				<label>Precio Lista:</label> <strong><?php echo '$' . $product['preciocosto'] ?></strong>
			</div>
			<div>
				<label>Precio Costo:</label> <strong><?php echo '$' . $product['preciolista'] ?></strong>
			</div>
			<div>
				<label>Descripcion:</label> <strong><?php echo $product['observaciones'] ?></strong>
			</div>
			<div>
				<a href="eliminar.php?id=<?php echo $product['id'] ?>" style="color:red;">ELIMINAR</a>
			
			</div>
		</article>
	<?php } ?>
</body>
</html>
