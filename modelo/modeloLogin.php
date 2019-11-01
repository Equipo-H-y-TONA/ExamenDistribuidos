<?php

if(isset($_POST["mail"]) && isset($_POST["password"]) ){
      $mail = $_POST["mail"];
     $password = $_POST["password"];
    
    $sql = $connect->query("SELECT * FROM `usuario`  where nick= '" . $mail . "' and password='" . $password . "'");
     
    $result = array();
    try{
    
        while ($extraer = $sql->fetch_assoc()) {
        $result[] = $extraer;
    }

    }catch(Exception $e){
        
    }
    
}
?>