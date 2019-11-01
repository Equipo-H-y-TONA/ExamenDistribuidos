<?php 
include_once "../modelo/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
<a href="vista/vistaLogin.php">login</a>

</div>
<a href="vista/vistaLogin.php">Registrate</a>

</div>
<br>
<br>

    <table>
    <tr>

    <td>libro</td>

    <td>Autor</td>

    <td>Comentar</td>

<td>eliminar</td>
    

  </tr>
<?php 

$response = array();
  $sql = $connect->query("SELECT * FROM libro");
     
    $result = array();

    while ($extraer = $sql->fetch_assoc()) {
        $result[] = $extraer;
    }

foreach($result as $libro){
    ?>



  

  <tr>


    <td><?php  echo $libro["titulo"] ?>;</td>
    <td><?php  echo $libro["autor"] ?>;</td>
    <td><a href="">comentar</a></td>
    <td><a href="">eliminar</a></td>
  

  </tr>


    
<?php 

}

?>
</table>

</body>
</html>