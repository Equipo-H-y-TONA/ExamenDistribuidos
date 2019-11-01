<?php
//$connect=new mysqli("localhost", "root","", "findprogrammerdb");
$connect=new mysqli("192.168.1.106", "gabo","contra", "books");
if(!$connect){
echo "fallo la conexion";
exit();
}

?>