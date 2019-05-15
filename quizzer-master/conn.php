<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","examen");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
// obtener un array asociativo 
    $arrRespuesta=array();

	$query=mysqli_query($conn,"select pregunta,a,b,c,d,respuesta from `pregunta`");
	while($filas=mysqli_fetch_array($query)){  

		$arrRespuesta[]=$filas;

/*
echo json_encode( array($questions['pregunta'],$questions['a'],$questions['b'],$questions['c'],$questions['d'],$questions['respuesta'],$questions['prueba_id']));
		echo $questions['pregunta'];
		echo $questions['a'];
		echo $questions['b'];
		echo $questions['c'];
		echo $questions['d'];
		echo $questions['respuesta'];
		echo $questions['prueba_id'];*/
	}		
//	echo json_encode(array('success' => 1));

	echo json_encode($arrRespuesta);
        
?>