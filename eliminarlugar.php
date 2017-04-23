<?php 
	
	require('conexion.php');
	
	$id_lugar_interes=$_GET['id_lugar_interes'];
	
	$query="DELETE FROM lugares_interes WHERE id_lugar_interes='$id_lugar_interes'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Lugar de interes</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Lugar Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Lugar</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="lugares.php">Regresar</a>
			
		</center>
	</body>
</html>