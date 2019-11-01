<?php
class ModeloBooks {
	public  $conexion;
	
	public function __construct() {
	
		$this->conexion = new mysqli("localhost", "root", "", "books");
		if ($this->conexion->connect_error) {
			die("Connection failed: " . $this->conexion->connect_error);
		}
    }
    
    function getBooks(){
  $response = array();
  
		$sql = "SELECT * FROM libro";
		if($result = mysqli_query($this->conexion,$sql)){
			while ($obj = mysqli_fetch_array($result)){
				array_push(	$response, $obj);
				
			}
			mysqli_free_result($result);
		}
		$this->conexion->close();
		return $response;

}

}
?>