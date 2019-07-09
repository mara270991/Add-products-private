<!DOCTYPE html>
<html>
<head>
	<title>Productos Private</title>
	<meta charset="utf-8">
	<style type="text/css">
		body { font-family: sans-serif; font-size:15px; }
		input { font-size:15px; width:400px; padding:6px; }
		div { margin-bottom:10px; }
		button { font-size:18px; }
	</style>
</head>
<body>
	<h1>Crear nuevo producto</h1>

	<form method="post" action="crear.php">
		<div>
			<input type="text" name="marca" placeholder="Marca">
		</div>
		<div>
			<input type="text" name="talle" placeholder="Talle">
		</div>
		<div>
			<input type="text" name="color" placeholder="Color">
		</div>
		<div>
			<input type="number" name="precioventa" placeholder="Precio Venta">
		</div>
		<div>
			<input type="number" name="preciolista" placeholder="Precio Lista">
		</div>
		<div>
			<input type="number" name="preciocosto" placeholder="Precio Costo">
		</div>
		<div>
			<input type="text" name="observaciones" placeholder="Descripcion">
		</div>

		<div>
			<button type="submit">CREAR</button>
		</div>
	</form>
</body>
</html>
