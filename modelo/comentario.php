<?PHP
include 'conexion.php';
echo $_POST["libro"];

$json=array();
/*Comprobar si se ha hecho un comentario antes*/
    if(isset($_GET["fkUsuario"])&& isset($_POST["fkLibro"]) && isset($_POST["comentario"]) && isset($_POST["fecha"])){
        $fkLibro=$_GET['fkLibro'];
        $fkUsuario = $_GET['fkUsuario'];
        $comentario= $_GET['comentario'];
        $fecha = $_GET['fecha'];

        $consulta="insert into comentario (comentario,fecha, fkUsuario, fkLibro) values ('".$comentario."','".$fecha."',".$fkUsuario.", ".$fkLibro.")";  
        
        if($resultado=mysqli_query($conexion, $consulta)){
            $json['usuario'][] =array("exito"=>1,);
        }else{
          $resulta['usuario']=array("exito"=>-1,);
          $json['usuario'][]=$resulta;
        }

        mysqli_close($conexion);
        echo json_encode($json);
    }
    else{
      $resulta["exito"]=0;
      $json['usuario'][]=$resulta;
      echo json_encode($json);
    }
?>