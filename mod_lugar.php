<?php 
	
	require('conexion.php');
	
	$id_lugar_interes=$_POST['id_lugar_interes'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
    $imagen_lugar=$_POST['imagen_lugar'];
    $id_pueblo=$_POST['id_pueblo'];
	
	$query="UPDATE lugares_interes SET nombre ='$nombre', descripcion='$descripcion', imagen_lugar = '$imagen_lugar', id_pueblo = '$id_pueblo' WHERE id_lugar_interes='$id_lugar_interes'";

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
				
				<h1>Lugar Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar informacion del Lugar</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="lugares.php">Regresar</a>
			
		</center>
	</body>
</html>
		