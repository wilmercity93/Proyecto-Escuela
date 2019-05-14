<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$descripcion=$_POST['descripcion'];
	
	mysqli_query($conn,"update prueba set descripcion='$descripcion'where id='$id'");
	header('location:index.php');

?>