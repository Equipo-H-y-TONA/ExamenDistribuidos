<?php
include_once "../modelo/conexion.php";
if(isset($_POST["titulo"]) && isset($_POST["autor"]) ){
 
      $titulo = $_POST["titulo"];
     $autor = $_POST["autor"];
    
    $sql = $connect->query("INSERT INTO `libro` (`idLibro`, `titulo`, `autor`) VALUES(NULL, '".$titulo."', '".$autor."')");
    try{
    
     
    if(empty($result)){
echo "usuario no existe";
header("Location: ../index.php");
    }else{
header("Location: ../vista/vistaLogueado.php");
    }

    }catch(Exception $e){
        
    }
    
}
?>