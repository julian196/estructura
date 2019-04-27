<?php 
	$cantidad=0;
	$nombre="b";
	//php es un lenguaje de expresiones
	?>

	<table>
		<tr>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Dni</th>
		</tr>

	<?php if(1): ?>
		<style type="text/css">
			td{
				background: green;
				color: white;
			}
		</style>

		<tr>
			<td>Luis</td>
			<td>Gutirrez</td>
			<td>1234567</td>
		</tr>

		<tr>
			<td>Juan</td>
			<td>Vasquez</td>
			<td>1234567</td>
		</tr>
	</table>
 <?php endif ?>