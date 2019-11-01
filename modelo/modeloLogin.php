<?php

if(isset($_POST["mail"]) && isset($_POST["password"]) ){
      $mail = $_POST["mail"];
     $password = $_POST["password"];
    
    $sql = $connect->query("SELECT usuario.*,desarrollador.* FROM desarrollador INNER JOIN usuario ON desarrollador.FK_USUARIO=usuario.ID_USUARIO where correo= '" . $mail . "' and password='" . $password . "'");
     
    $result = array();
    try{
    
        while ($extraer = $sql->fetch_assoc()) {
        $result[] = $extraer;
    }

    }catch(Exception $e){
        
    }
    
}
?>