<?php
 require('conexion.php');

$account_name = $_POST['account_name'];
$pass = md5($_POST['pass']);
 
if(empty($account_name) || empty($pass)){
header("Location: index.php");
exit();
}
$query="SELECT * FROM user WHERE account_name ='".$account_name."';";
$resultado=$mysqli->query($query);
if($row = mysqli_fetch_array($resultado)){
if($row['pass'] == $pass){
session_start();
$_SESSION['account_name'] == $account_name;
header("Location: admin.php");
}else{
header("Location: login.php");
exit();
}
}else{
    header("Location: login.php");
    exit();
}
 
 
?>