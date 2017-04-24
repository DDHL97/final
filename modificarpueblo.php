<?php
	
	require('conexion.php');
	$id_pueblo=$_GET['id_pueblo'];
	$query="SELECT nom_pueblo, descripcion FROM pueblos WHERE id_pueblo='$id_pueblo'";
	$resultado=$mysqli->query($query);
	$row=$resultado->fetch_assoc();
?>
<html>
<head>
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
	if(confirm('Esta seguro de querer BORRAR este registro?'))
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
            <a href="admin.php" class="navbar-brand">Le Tournée Admin</a>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="bienvenido.php">Acerca de</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Nuevo <b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                                <li><a href="nuevopueblo.php">Nuevo Pueblo Magico</a></li>
                                <li><a href="nuevolugar.php">Nuevo lugar de interes</a></li>
                            <li><a href="nuevaguia.php">Nueva Guia</a></li>
                        </ul>
                </li>
                <li><a href="pueblos.php">Pueblos magicos</a></li>
                <li><a href="lugares.php">Lugares de interes</a></li>
                <li><a href="guias.php">Guias</a></li>
            </ul>
        </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="page-header text center">
                <h1>Modificar</h1>       
            </div>
            <form name="modificar_pueblos" class="form-signin" method="post" action="mod_pueblo.php">
                <input type="hidden" name="id_pueblo" value="<?php echo $id_pueblo; ?>">
                <label for="nombrepueblo" class="sr-only">Nombre Pueblo</label>
                <input type="text" name="nom_pueblo" class="form-control" value="<?php echo $row['nom_pueblo']; ?>">
                <label for="ldescripcion" class="sr-only">Descripción</label>
                <textarea type="text" name="descripcion" class="form-control" rows="10" cols="40" ><?php echo $row['descripcion']; ?></textarea>
                <label for="imagen">Subir imagen del pueblo magico</label>
                <input type="file" name="imagen_pueblo">
                <input type="submit" class="btn btn-lg btn-primary btn-block" value = "Guardar">
            </form>
        </div>
    </div>
</div>
</body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
 
</html>	
