<?php 
	
	require('conexion.php');
	
	$id_guia=$_GET['id_guia'];
	
	$query="DELETE FROM guia WHERE id_guia='$id_guia'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Guia</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Guia Eliminada</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Guia</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="guias.php">Regresar</a>
			
		</center>
	</body>
</html>