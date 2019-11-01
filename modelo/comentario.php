<?PHP
include 'conexion.php';
echo $_POST["nombre"];
echo "Comentario: <br>".$_POST["comentario"];
//if (true) {
 if (isset($_POST["ID"])) {

$FECHA=date("Y-m-d");
  $ID = $_POST["ID"];
  $REQ = $_POST["REQ"];
  
$sql = $connect->query("INSERT INTO `req_formales` (`ID_REQ_F`, `REQUERIMIENTO`, `FECHA`, `F_REQ_CUMPLIDO`, `FK_PROYECTO`) VALUES (NULL, '".$REQ."', '".$FECHA."', '0', '".$ID."')");

echo $sql;

}
?>