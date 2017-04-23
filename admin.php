<?php
	require('conexion.php');
	$query="SELECT id_principal,pueblo, bienvenida, img_pueblo FROM principal";
	$resultado=$mysqli->query($query);	
?>
<html>
<head>
    <script>
function confirmar()
{
	if(confirm('¿Desea salir de modo administrador?'))
		return true;
	else
		return false;
}
</script>
    <title>Administrador Pueblos Magicos</title>
    <style>
        #menu {
            width: 200px;
            float: right;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <link href="static/css/carrusel.css" rel="stylesheet">
    <script>
function confirmar()
{
	if(confirm('¿Desea salir del modo administrador?'))
		return true;
	else
		return false;
}
</script>
</head>
<body>
    
    <nav role="navigation" class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="bienvenido.php" class="navbar-brand">Le Tournée Admin</a>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="bienvenido.php">Acerca de</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Nuevo <b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                                <li><a href="nuevopueblo.php">Nuevo Pueblo Magico</a></li>
                                <li><a href="nuevolugar.php">Nuevo lugar de interes</a></li>
                        </ul>
                </li>
                <li><a href="pueblos.php">Pueblos magicos</a></li>
                <li><a href="lugares.php">Lugares de interes</a></li>
                <li><a href="login.php" onclick="return confirmar()">Cerrar Sesión</a></li>
            </ul>
        </div>
</nav>
    <?php while($row=$resultado->fetch_assoc()){?>
	<div class="col-lg-4">
          <img class="img-circle" src="static/images/<?php echo $row['img_pueblo'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $row['pueblo'];?></h2>
    <p><?php echo $row['bienvenida'];?></p>
          <p><a href="modificarinicio.php?id_principal=<?php echo $row['id_principal'];?>" role="button" class="btn btn-default">modificar &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    <?php } ?>

<div class="col-lg-4">
    <a  href="mod_index.php" role="button"> <img class="img-circle"  src="static/imgweb/agregar2.png" width="140" height="140" ></a>
    <h2>Agregar nuevo pueblo</h2>
        </div><!-- /.col-lg-4 -->
</body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
 
</html>