<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$pregunta=$_POST['pregunta'];
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$respuesta=$_POST['respuesta'];
	$prueba_id=$_POST['prueba_id'];
	
	mysqli_query($conn,"update pregunta set pregunta='$pregunta', a='$a', b='$b', c='$c', d='$d', respuesta='$respuesta', prueba_id='$prueba_id' where id='$id'");
	header('location:index.php');

?>