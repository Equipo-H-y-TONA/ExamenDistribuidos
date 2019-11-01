<?php
include_once "../modelo/conexion.php";
if(isset($_POST["titulo"]) && isset($_POST["autor"]) ){
 
      $titulo = $_POST["titulo"];
     $autor = $_POST["autor"];
    
    $sql = $connect->query("insert into `libro`  values titulo= '" . $titulo . "' and autor='" . $autor . "'");
     
    $result = array();
    try{
    
        while ($extraer = $sql->fetch_assoc()) {
        $result[] = $extraer;
    }
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