<?php

	require('conexion.php');

$sql_query = "SELECT * FROM lugares_interes;";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>