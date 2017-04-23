<?php
	
	require('conexion.php');

if(isset($_POST['id_pueblo'])){

$id_pueblo = $_POST['id_pueblo'];
$query = "SELECT * FROM pueblos WHERE id_pueblo='$id_pueblo'";
$resultado=$mysqli->query($query);
$rows = array();
while($r = mysqli_fetch_assoc($resultado)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el pueblo";
?>
