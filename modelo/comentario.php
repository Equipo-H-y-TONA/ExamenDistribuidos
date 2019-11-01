<?PHP
include 'conexion.php';
$nombre = $_POST["nombre"];
$comentario = $_POST["comentario"];
echo $nombre;
echo "Comentario: <br>".$comentario;
//if (true) {
 if (isset($_POST["ID"])) {

$FECHA=date("Y-m-d");
  $ID = $_POST["ID"];
  $REQ = $_POST["REQ"];
  
$sql = $connect->query("INSERT INTO `comentario` (`idComentario`, `comentario`, `fecha`, `fkUsuario`, `fkLibro`) VALUES (NULL, '".$comentario."', NOW(), '0', '".$ID."')");

echo $sql;

}
?>