<?php 
	
	require('conexion.php');
	
	$nom_puelo=$_POST['nom_pueblo'];
	$descripcion=$_POST['descripcion'];
	$filename = basename( $_FILES['imagen_pueblo']['name']);
    $query="INSERT INTO pueblos (nom_pueblo, descripcion,imagen_pueblo) VALUES ('$nom_pueblo','$descripcion','$filename')";
	$resultado=$mysqli->query($query);
$target_path = "static/images/";
$target_path = $target_path . $filename;
if(move_uploaded_file($_FILES['imagen_pueblo']['tmp_name'], $target_path)) { 
    echo "El archivo ". $filename. " ha sido subido";
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}
?>
<html>
	<head>
		<title>Guardar pueblo</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Pueblo Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar pueblo</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="pueblos.php">Ir a Lista de Pueblos Magicos</a>
			
		</center>
	</body>
	</html>	
