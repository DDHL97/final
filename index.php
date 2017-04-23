<?php
	require('conexion.php');
	$query="SELECT pueblo, bienvenida, img_pueblo FROM principal";
	$resultado=$mysqli->query($query);	
?>
<html>
<head>
    <title>Pueblos Magicos del esatdo de Hidalgo</title>
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
            <a href="index.php" class="navbar-brand">Le Tournée</a>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Acerca de</a></li>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="descarga.php">DESCARGA NUESTRA APP</a></li>
            </ul>
        </div>
</nav>
<h1>Pueblos Magicos del estado de Hidalgo</h1>
<div class="navbar-w rapper">
<div class="containercarrusel">
    	<div id="carousel">
            <figure><img src="static/imgweb/huasca/imag5.jpg" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/huasca/huasca4.jpg" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/huasca/huasca2.jpg" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/huasca/HuascaPrismas.JPG" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/huasca/fondo2huasca.jpg" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/realdelmonte.jpg" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/huichapan.jpg" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/iglesia.jpg" width="290" height="250" alt=""></figure>
			<figure><img src="static/imgweb/tecozautla.jpg" width="290" height="250" alt=""></figure>
		</div>
	</div>
</div>
<br>
<br/>
<br>
<br/>
<br>
<br/>
<br>
<br/>
<br>
<br/>
<?php while($row=$resultado->fetch_assoc()){?>
	<div class="col-lg-4">
          <img class="img-circle" src="static/images/<?php echo $row['img_pueblo'];?>" alt="Generic placeholder image" width="140" height="140">
          <h2><?php echo $row['pueblo'];?></h2>
    <p><?php echo $row['bienvenida'];?></p>
          <p><a class="btn btn-default" href="<?php echo $row['pueblo'];?>.php" role="button">Ver más &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    <?php } ?>

</body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
 
</html>