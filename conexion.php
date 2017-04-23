<?php
	
	
	$mysqli=new mysqli("jnc6n3xpbgc3kek2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com","rgdmjctgde608gbx","nau87qigufzduy9h","f9dyflq3fbtoh3hl"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	//$mysqli=new mysqli("localhost","root","1234","letournee");

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>