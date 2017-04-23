<?php 
	
	require('conexion.php');
	
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion'];
    $id_pueblo=$_POST['id_pueblo'];
	$filename = basename( $_FILES['imagen_lugar']['name']);
$query="INSERT INTO lugares_interes (nombre, descripcion,imagen_lugar, id_pueblo) VALUES ('$nombre','$descripcion','$filename','$id_pueblo')";
	$resultado=$mysqli->query($query);
$target_path = "static/images/";
$target_path = $target_path . $filename;
if(move_uploaded_file($_FILES['imagen_lugar']['tmp_name'], $target_path)) { 
    echo "El archivo ". $filename. " ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}
?>
<html>
	<head>
		<title>Guardar producto</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Lugar Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Lugar</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="lugares.php">Ir a lista de Lugares de iteres</a>
			
		</center>
	</body>
	</html>	
