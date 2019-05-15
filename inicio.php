<!DOCTYPE html>
<html>
<head>
	<title>Tienda EC</title>
</head>
<body>
	<h1>Tiendas EC</h1>
	<hr>
	<h2>Bienvenido</h2>
	<h2>Productos de la Tienda</h2>
	<table border="5">
		<tr>
			<td>Código</td>
			<td>Nombre</td>
			<td>Tipo</td>
			<td>Cantidad Stock</td>
			<td>Precio</td>
		</tr>

		<?php

			include('php/conection.php');
			$sqlquery = "SELECT * FROM productos";
			$res = $conn->query($sqlquery);
			while ($productos = $res->fetch_assoc()) {
		?>

		<tr>
			<td><?php echo $productos['codigo'] ?></td>
			<td><?php echo $productos['nombre'] ?></td>
			<td><?php echo $productos['tipo'] ?></td>
			<td><?php echo $productos['cantidad'] ?></td>
			<td><?php echo $productos['precio'] ?></td>
		</tr>
		<?php 
			}
		?>
	</table>
	<br><br><a href="nuevo_producto.php">Ingresar Nuevo Producto</a>
	<br><br><a href="index.php">Salir</a>
</body>
</html>