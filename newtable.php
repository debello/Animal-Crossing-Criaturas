<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lista de Animales AC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="css\listaprincipal.css" rel="stylesheet" media="screen" type="text/css" />
	<link href="css/image1.css" rel="stylesheet" media="screen" type="text/css" />
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
<div class="container limiter">
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

<script>
// Get the modal
// var modal = document.getElementById("myModal");

// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById("myImg");
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//   modal.style.display = "none";
// }
</script>

</body>
</html>