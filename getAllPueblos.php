<?php

	require('conexion.php');

$sql_query = "SELECT * FROM pueblos;";
$result = $mysqli->query($sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
