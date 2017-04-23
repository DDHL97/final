<?php 
	
	require('conexion.php');
	
	$id_pueblo=$_POST['id_pueblo'];
	$nom_pueblo=$_POST['nom_pueblo'];
	$descripcion=$_POST['descripcion'];
	
	$query="UPDATE pueblos SET nom_pueblo ='$nom_pueblo', descripcion='$descripcion' WHERE id_pueblo='$id_pueblo'";

	$resultado=$mysqli->query($query);
	
?>
<html>
	<head>
		<title>Modificar producto</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Pueblo Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar informacion del Pueblo</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="pueblos.php">Regresar</a>
			
		</center>
	</body>
</html>
		