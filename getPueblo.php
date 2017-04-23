<¿php

require('conexion.php');
if(isset($_POST["id_pueblo"])){

$id_pueblo = $_POST["id_pueblo"];
$sql_query = "SELECT * FROM pueblos WHERE id_pueblo='$id_pueblo';";
$result = mysql_query($sql_query);
$rows = array();
while($r = mysql_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el pueblo";
mysql_close($connection);
?>