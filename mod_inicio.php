<?php	
	require('conexion.php');
	
	$id_principal=$_POST['id_principal'];
	$pueblo=$_POST['pueblo'];
	$dbienvenida=$_POST['bienvenida'];
    $img_pueblo=$_POST['img_pueblo'];
	
	$query="UPDATE principal SET pueblo ='$pueblo', bienvenida='$bienvenida', img_pueblo = '$img_pueblo' WHERE id_principal='$id_principal'";
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
				
				<h1>Inicio Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="admin.php">Regresar</a>
			
		</center>
	</body>
</html>