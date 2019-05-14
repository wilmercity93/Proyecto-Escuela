<?php
	include('conn.php');
	
	$descripcion = $_POST['descripcion'];
	
	mysqli_query($conn,"insert into prueba (descripcion) values ('$descripcion')");
	header('location:index.php');

?>