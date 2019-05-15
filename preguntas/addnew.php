<?php
	include('conn.php');
	
	$pregunta=$_POST['pregunta'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$respuesta=$_POST['respuesta'];
	$prueba_id=$_POST['prueba_id'];
	//$prueba_id = 1;

	mysqli_query($conn,"insert into pregunta (pregunta, a, b, c, d, respuesta, prueba_id) values ('$pregunta', '$a', '$b', '$c', '$d', '$respuesta', '$prueba_id')");
	header('location:index.php');

?>