<?php
	require('conexion.php');
	$query="SELECT id_pueblo, nom_pueblo, descripcion FROM pueblos";
	$resultado=$mysqli->query($query);	
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
                        </ul>
                </li>
                <li><a href="pueblos.php">Pueblos magicos</a></li>
                <li><a href="lugares.php">Lugares de interes</a></li>
            </ul>
        </div>
</nav>

    <table class = "table table-hover">
			<thead>
				<tr>
                    <td><b> Id Pueblo </b></td>
					<td><b> Nombre del pueblo </b></td>
					<td><b> Descripcion </b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){?>
						<tr>
                            <td>
								<?php echo $row['id_pueblo'];?>
							</td>
							<td>
							<?php echo $row['nom_pueblo'];?>
							</td>
							<td>
								<?php echo $row['descripcion'];?>
							</td>
							<td>
								<a href="modificarpueblo.php?id_pueblo=<?php echo $row['id_pueblo'];?>">
								<span class="glyphicon glyphicon-pencil"><br/>Modificar</span></a>
							</td>
							<td>
								<a href="eliminarpueblo.php?id_pueblo=<?php echo $row['id_pueblo'];?>" onclick="return confirmar()"><span class="glyphicon glyphicon-trash"><br/>Borrar</span></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
		</table>
</body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
 
</html>