<!DOCTYPE html>
<html>
<head>
	<title>
		Registro de usuario
	</title>
</head>
<body>

<header>
	<h1>Registrese en nuestra libreria</h1>
</header>

 <form action="controlador/controladorRegister.php" method="post"> 

 <hr />

 <h3>Crea una cuenta</h3>

 <!--Nombre Usuario-->

 <label for="nombre">Nombre de Usuario:</label><br>

 <input type="text" name="username" required>

 <br/><br/>

 
 <!--Password-->

 <label for="pass">Password:</label><br>

 <input type="password" name="password" required>


 <br/><br/>

 <input type="submit" name="submit" value="Registrarme">

 <input type="reset" name="clear" value="Borrar">

 </form>

</body>
</html>