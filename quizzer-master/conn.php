<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","examen");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

	$query=mysqli_query($conn,"select * from `pregunta`");
	while($questions=mysqli_fetch_array($query)){  


echo json_encode( array($questions['pregunta'],$questions['a'],$questions['b'],$questions['c']));
		/*echo $questions['pregunta'];
		echo $questions['a'];
		echo $questions['b'];
		echo $questions['c'];
		echo $questions['d'];
		echo $questions['respuesta'];
		echo $questions['prueba_id'];*/
	}		
//	echo json_encode(array('success' => 1));
        
?>