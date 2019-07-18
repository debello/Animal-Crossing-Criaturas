<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lista de Animales AC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" >
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen" type="text/css" >
	<link rel="stylesheet" href="css/listaprincipal.css" media="screen" type="text/css" >
</head>

<body>
<?php 
require_once 'arrayJSON.php';
?>
<div class="container limiter">
	<table id="peces" class="table" >
		<thead class="table-dark">
			<tr>
				<th>Imagen</th>
				<th>Insecto</th>
				<th>Bayas</th>
				<th>Ubicacion</th>
				<th>Meses</th>
				<th>Horas</th>
			</tr>
		</thead>

		<?php for ($i = 0; $i<$sizeRow; $i++) {?>
		<tbody class="table-dark">
			<tr>
				<td><img src='<?php echo $peces["Imagen"][$i];?>' width="50px" /></td>
				<td><?php echo $peces["Insecto"][$i];?></td>
				<td><?php echo $peces["Bayas"][$i];?></td>
				<td><?php echo $peces["Ubicacion"][$i];?></td>
				<td><?php echo $peces["Meses"][$i];?></td>
				<td><?php echo $peces["Horas"][$i];}?></td>
			</tr>
		</tbody>
	</table>
</div>
	


</body>
</html>