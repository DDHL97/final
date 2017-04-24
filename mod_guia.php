<?php	
	require('conexion.php');
	
	$id_guia=$_POST['id_guia'];
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
	$query="UPDATE guia SET paso1 = '$paso1', paso2 = '$paso2', paso3 = '$paso3', paso4 = '$paso4', paso5 = '$paso5', paso6 = '$paso6', paso7 = '$paso7', paso8 = '$paso8', paso9 = '$paso9', paso10 = '$paso10', id_pueblo='$id_pueblo'  WHERE id_guia='$id_guia'";
	$resultado=$mysqli->query($query);
?>
<html>
	<head>
		<title>Modificar guia</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Guia Modificada</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="guias.php">Regresar</a>
			
		</center>
	</body>
</html>