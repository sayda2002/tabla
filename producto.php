<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	include 'conexion.php';
	$sel = $con->query("SELECT * FROM productos");
	?>
	<table border="10">
		<caption>REGISTRO DE PRODUCTOS</caption>
		<thead>
			<tr>
				<th>#</th>
				<th>nombre productos</th>
				<th>precio</th>
				<th>fecha vencimiento</th>
				<th>descripcion</th>
				<th>stock</th>
				<th>fecha registro</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while ($var = $sel->fetch_assoc()) {
			 ?>
			 <tr>
			 	<td><?php echo $var['idproductos']; ?></td>
			 	<td><?php echo $var['nombreproducto']; ?></td>
			 	<td><?php echo $var['precio']; ?></td>
			 	<td><?php echo $var['fechavencimiento']; ?></td>
			 	<td><?php echo $var['descripcion']; ?></td>
			 	<td><?php echo $var['stock']; ?></td>
			 	<td><?php echo $var['fecharegistro']; ?></td>

			 </tr>
			 <?php } ?>
			
		</tbody>
	</table>

</body>
</html>