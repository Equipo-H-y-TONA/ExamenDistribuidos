<?php 
require_once "modelo/modeloBooks.php";
$modelo=new ModeloBooks(); 
$matriz=$modelo->getBooks();

require_once "vista/vistaBooks.php";


?>