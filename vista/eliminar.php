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
<a href="vista/crearLibro.php">Crear libro</a>

</div>
<a href="../index.php">Cerrar Sesion</a>

</div>
<br>
<br>

    <table>
    <tr>

    <td>libro</td>

    <td>Autor</td>

    <td>Eliminar</td>


    

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



  
<form action="../modelo/eliminar.php">  
  <tr>


    <td><?php  echo $libro["titulo"] ?>;</td>
    <td><input name="nombre" value="<?php  echo $libro["autor"]?>"></td>
    <td><button type="submit">elimminar</button></td>

  

  </tr>

</form>
    
<?php 

}

?>
</table>

</body>
</html>