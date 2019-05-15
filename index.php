<!DOCTYPE html>
<html>
<head>
	<h1>Tiendas EC</h1>
	<hr>
    <title>Iniciar Sesión</title>
</head>
<body>
   <h1>Iniciar Sesión</h1> 

    <form action="php/process_login.php" method="post">
        <input type="text" name="username" placeholder="Usuario">
        <br>
        <br>
        <br>
        <input type="password" name="password" placeholder="Clave">
        <br>
        <br>
        <br>
        <button>Ingresar</button>
        <br>
        <br>
        <a href="registro_tienda.php">Registrar Mi Tienda</a>
    </form>
</body>
</html>