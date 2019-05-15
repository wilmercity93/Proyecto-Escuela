<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","examen");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
// obtener un array asociativo 
    $arrRespuesta=array();

	$query=mysqli_query($conn,"select pregunta,a,b,c,d,respuesta from `pregunta` where prueba_id = 1");
	while($filas=mysqli_fetch_array($query)){ 
		$arrRespuesta[]=$filas;
	}		
//	echo json_encode(array('success' => 1));
	echo json_encode($arrRespuesta);        
?>