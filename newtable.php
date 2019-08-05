<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lista de Animales AC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link href="css\listaprincipal.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="css/image1.css" rel="stylesheet" media="screen" type="text/css" /> -->
	<link href="css/animalstyle2.css" rel="stylesheet" media="screen" type="text/css" />
</head>

<body>
<!-- <img id="myImg" src="images/peinados_.png" alt="Snow" style="width:100%;max-width:300px"> -->

<!-- The Modal -->
<!-- <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div> -->

<?php 
require_once 'arrayJSON.php';
?>
<div>
<div class="container limiter">
	<p>Guía de Criaturas, Peinados... en Animal Crossing AC
	<br>
	Basada en la original de 
	<a href="http://www.guiasnintendo.com/0a_NINTENDO_3DS/animal_crossing_new_leaf/animal_crossing_new_leaf_sp/peces.html">guiasnintendo</a>.</p>
		<!-- <a href="http://www.elnauta.net/animal-crossing-leaf-la-peluqueria-de-chez-marilin-elige-tu-peinado/"> -->
	<button class="button button2" onclick="showTable()"> Lista de Bichos  </button>
	<button class="button button1" onclick="showTable2()">Peinados</a></button>
	<div id="imagen-peinados" style="display:none">
		<img src="images/peinados_.png">
		<img src="images/colores_.png">
	</div>
	<div id="tablas-bichos" style="display:none">
		<table class="table" >
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
</div>

<script type="text/javascript">
  let xtables = document.getElementById("tablas-bichos");
  let peinados = document.getElementById("imagen-peinados");
  function showTable() {
    xtables.style.display === "none" ? xtables.style.display = "block" : xtables.style.display = "none"
    peinados.style.display = "none"
  }
  function showTable2() {
    peinados.style.display === "none" ? peinados.style.display = "block" : peinados.style.display = "none"
    xtables.style.display = "none"
  }
</script>

</body>
</html>