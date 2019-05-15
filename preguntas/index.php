<!DOCTYPE html>
<html>
<head>
	<title>PREGUNTAS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<?php
	$id_prueba = $_REQUEST['id_prueba'];
	?>
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:100%;">
	<span style="font-size:30px;"><center><strong>PREGUNTAS</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<span class="pull-right"><a href="../pruebas/index.php?id_prueba=<?php echo $id_prueba; ?>"  class="btn btn-secondary btn-lg"><span class="glyphicon glyphicon-share"></span> Regresar Pruebas</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Preguntas</th>
				<th>A</th>
				<th>B</th>
				<th>C</th>
				<th>D</th>
				<th>Respuestas</th>
				<th>Prueba</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
								
				$query=mysqli_query($conn,"select pre.id,pre.pregunta, pre.a,pre.b,pre.c,pre.d,pre.respuesta,pru.descripcion from `pregunta` as pre, `prueba` as pru where pru.id = pre.prueba_id and pru.id ='+$id_prueba+' ");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['pregunta']; ?></td>
						<td><?php echo $row['a']; ?></td>
						<td><?php echo $row['b']; ?></td>
						<td><?php echo $row['c']; ?></td>
						<td><?php echo $row['d']; ?></td>
						<td><?php echo $row['respuesta']; ?></td>
						<td><?php echo $row['descripcion']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>