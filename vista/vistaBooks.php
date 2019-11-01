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
    
<?php 
foreach($matriz as $libro){
    echo $libro["titulo"];

}

?>

</body>
</html>