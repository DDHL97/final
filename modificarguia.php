<?php
	
	require('conexion.php');
	$id_guia=$_GET['id_guia'];
	$query="SELECT * FROM guia WHERE id_guia='$id_guia'";
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
                <h1>Nuevo Guia para....</h1>       
            </div>
            <form class="form-signin" method="post" action="mod_guia.php" enctype="multipart/form-data">
                <input type="hidden" name="id_guia" value="<?php echo $id_guia; ?>">
                <label for="lpaso1" class="sr-only">Paso1</label>
                <textarea type="text" name="paso1" class="form-control" rows="10" cols="40" ><?php echo $row['paso1']; ?></textarea>
                <label for="lpaso2" class="sr-only">Paso2</label>
                <textarea type="text" name="paso2" class="form-control" rows="10" cols="40" ><?php echo $row['paso2']; ?></textarea>
                <label for="lpaso3" class="sr-only">Paso3</label>
                <textarea type="text" name="paso3" class="form-control" rows="10" cols="40" ><?php echo $row['paso3']; ?></textarea>
                <label for="lpaso4" class="sr-only">Paso4</label>
                <textarea type="text" name="paso4" class="form-control" rows="10" cols="40" ><?php echo $row['paso4']; ?></textarea>
                <label for="lpaso5" class="sr-only">Paso5</label>
                <textarea type="text" name="paso5" class="form-control" rows="10" cols="40" ><?php echo $row['paso5']; ?></textarea>
                <label for="lpaso6" class="sr-only">Paso6</label>
                <textarea type="text" name="paso6" class="form-control" rows="10" cols="40" ><?php echo $row['paso6']; ?></textarea>
                <label for="lpaso7" class="sr-only">Paso7</label>
                <textarea type="text" name="paso7" class="form-control" rows="10" cols="40"><?php echo $row['paso7']; ?></textarea>
                <label for="lpaso8" class="sr-only">Paso8</label>
                <textarea type="text" name="paso8" class="form-control" rows="10" cols="40" ><?php echo $row['paso8']; ?></textarea>
                <label for="lpaso9" class="sr-only">Paso9</label>
                <textarea type="text" name="paso9" class="form-control" rows="10" cols="40" ><?php echo $row['paso9']; ?></textarea>
                <label for="lpaso10" class="sr-only">Paso10</label>
                <textarea type="text" name="paso10" class="form-control"rows="10" cols="40"><?php echo $row['paso10']; ?></textarea>
                <label for="nombrepueblo" class="sr-only">Nombre del pueblo perteneciente</label>
                <input type="number" name="id_pueblo" class="form-control" value="<?php echo $row['id_pueblo']; ?>" >
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
