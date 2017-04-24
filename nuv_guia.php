<?php 
	
	require('conexion.php');
	
	$paso1=$_POST['paso1'];
    $paso2=$_POST['paso2'];
    $paso3=$_POST['paso3'];
    $paso4=$_POST['paso4'];
    $paso5=$_POST['paso5'];
    $paso6=$_POST['paso6'];
    $paso7=$_POST['paso7'];
    $paso8=$_POST['paso8'];
    $paso9=$_POST['paso9'];
    $paso10=$_POST['paso10'];
    $id_pueblo=$_POST['id_pueblo'];
$query="INSERT INTO guia (paso1, paso2, paso3, paso4, paso5, paso6, paso7, paso8, paso9, paso10, id_pueblo) VALUES ('$paso1','$paso2','$paso3','$paso4','$paso5','$paso6','$paso7','$paso8','$paso9','$paso10','$id_pueblo')";
	$resultado=$mysqli->query($query);
?>
<html>
	<head>
		<title>Guardar guia</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Guia Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Guia</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="guias.php">Ir a lista de Lugares de iteres</a>
			
		</center>
	</body>
	</html>	