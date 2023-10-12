<?php
require 'ConexionPrueba.php';

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form method="POST">
	<table class="Datitos" border="1">
		<thead>
		
		<tr>
			<th>Nombre</th>
			<th>Curso</th>
			<th>Nota 1</th>
			<th>Nota 2</th>
			<th>Nota 3</th>
			<th>Promedio</th>
		</tr>
	</thead>
		
		<tbody>
		<?php 
		while($obj=pg_fetch_object($consulta)){
		?>
		
		
		<tr>
		<td><?php echo $obj->estudiante;?></td>
		<td><?php echo $obj->curso;?> </td>
		<td><?php echo $obj->nota_trimestre_1;?> </td>
		<td><?php echo $obj->nota_trimestre_2;?> </td>
		<td><?php echo $obj->nota_trimestre_3;?> </td>
		<td><?php echo $obj->promedio;?></td>
		</tr>
		</tbody>
		<?php
	}
	?>
		
		</table>
	
	</form>
	
	
</body>
</html>