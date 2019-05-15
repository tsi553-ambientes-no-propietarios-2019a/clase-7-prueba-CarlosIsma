<!DOCTYPE html>
<html>
<head>
	<title>Tienda EC</title>
</head>
<body>
	<h1>Tiendas EC</h1>
	<hr>
	<h2>Bienvenido</h2>
	<h2>Tiendas</h2>
	<table border="5">
		<tr>
			<td>Nombre</td>
			<td>Direccion</td>
			<td>Usuario</td>
			<td>Clave</td>
		</tr>

		<?php

			include('php/conection.php');
			$sqlquery = "SELECT * FROM tienda";
			$res = $conn->query($sqlquery);
			while ($tienda = $res->fetch_assoc()) {
		?>

		<tr>
			<td><?php echo $tienda['nombre'] ?></td>
			<td><?php echo $tienda['direccion'] ?></td>
			<td><?php echo $tienda['usuario'] ?></td>
			<td><?php echo $tienda['clave'] ?></td>
		</tr>
		<?php 
			}
		?>
	</table>
	<br><br><a href="registro_tienda.php">Ingresar Nueva Tienda</a>
</body>
</html>