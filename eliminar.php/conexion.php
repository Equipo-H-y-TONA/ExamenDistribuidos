<?php
//$connect=new mysqli("localhost", "root","", "findprogrammerdb");
$connect=new mysqli("localhost", "root","", "books");
if(!$connect){
echo "fallo la conexion";
exit();
}

?>