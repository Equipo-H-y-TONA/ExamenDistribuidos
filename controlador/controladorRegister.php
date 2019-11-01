
<?php

 

 $host_db = "192.168.1.106";

 $user_db = "gabo";

 $pass_db = "contra";

 $db_name = "books";

 $tbl_name = "usuario";

  

 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);

}

 

 $buscarUsuario = "SELECT * FROM $tbl_name

 WHERE nick = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {

 echo "<br />". "El Nombre de Usuario ya a sido tomado." . "<br />";

 

 echo "<a href='index.html'>Por favor escoga otro Nombre</a>";

 }

 else{

 

 $form_pass = $_POST['password'];
 

 $hash = password_hash($form_pass, PASSWORD_BCRYPT);

 

 $query = "INSERT INTO Usuario (nombre, apellidoPaterno, apellidoMaterno, nick, password)

           VALUES ('$_POST[name_user]', '$_POST[ap_paterno]', '$_POST[ap_materno]', '$_POST[username]', '$_POST[password]')";

 

 if ($conexion->query($query) === TRUE) {

  

 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";

 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";

 echo "<h5>" . "Hacer Login: " . "<a href='index.php'>Login</a>" . "</h5>";

 }


 else {

 echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;

   }

 }

 mysqli_close($conexion);

?>
