<?php 
	
	require('conexion.php');
	
	$pueblo=$_POST['pueblo'];
	$bienvenida=$_POST['bienvenida'];
	$filename = basename( $_FILES['img_pueblo']['name']);
	
	$query="INSERT INTO principal (pueblo, bienvenida,img_pueblo) VALUES ('$pueblo','$bienvenida','$filename')";
	
	$resultado=$mysqli->query($query);
    $target_path = "static/images/";
    $target_path = $target_path . $filename;
    if(move_uploaded_file($_FILES['img_pueblo']['tmp_name'], $target_path)) { 
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
				<h1>Producto Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Producto</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="admin.php">Ir al inicio</a>
			
		</center>
	</body>
	</html>	