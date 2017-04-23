<?php 
	
	require('conexion.php');
	
	$id_pueblo=$_GET['id_pueblo'];
	
	$query="DELETE FROM pueblos WHERE id_pueblo='$id_pueblo'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Eliminar Pueblo</title>
	</head>
	
	<body>
		<center>
			<?php 
				if($resultado>0){
				?>
				
				<h1>Pueblo Eliminado</h1>
				
				<?php 	}else{ ?>
				
				<h1>Error al Eliminar Pueblo</h1>
				
			<?php	} ?>
			<p></p>		
			
			<a href="pueblos.php">Regresar</a>
			
		</center>
	</body>
</html>