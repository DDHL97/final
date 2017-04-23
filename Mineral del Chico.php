<?php
	require('conexion.php');
	$query="SELECT nom_pueblo, descripcion FROM pueblos where id_pueblo = '3'";
    $query1="SELECT p.posicionx, p.posiciony, p.id_lugar_interes, l.nombre, l.descripcion, l.imagen_lugar FROM lugares_interes l,  posicion p where l.id_lugar_interes = p.id_lugar_interes AND l.id_pueblo = '3' AND p.id_pueblo = '3'";
	$resultado=$mysqli->query($query);	
    $resultado1=$mysqli->query($query1);
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
            </ul>
        </div>
</nav>
<div align="center">
<h1>Visita Real del Monte</h1>
<h2>Pueblo Magico del estado de Hidalgo</h2>
</div>
<div id="contenedor" class="carousel slide" data-ride="carousel"  >
    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <!-- Carousel items -->
    
      <div class="carousel-inner" align = "center" width="500" height="434">
        <div class="active item"><img  src="static/imgweb/mineralchico/minaantonio.jpg" alt="Iglesia"  width="500" height="434" /></div>
        <div class="item"><img  src="static/imgweb/mineralchico/Mineraldelchicgaleria3.jpg" alt="banner2"  width="500" height="434" /></div>
        <div class="item"><img  src="static/imgweb/mineralchico/mineral.jpg" alt="banner3"  width="500" height="434" /></div>
        <div class="item"><img  src="static/imgweb/mineralchico/Mineraldelchicgaleria3.jpg" alt="banner4"  width="500" height="434" /></div>
      </div>
            </div>
      <!-- Carousel nav -->
      <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
 
<script src="js/jquery.js"></script>
<script src="static/js/bootstrap.min.js"></script>
<br/>
    <br/>
    
			<?php while($row=$resultado->fetch_assoc()){?>
							<h3>
								<?php echo $row['descripcion'];?> <br/>
							</h3>
                    <?php } ?>
    
                    <h3>Lugares de interes</h3>
    <?php while($row=$resultado1->fetch_assoc()){?>
    <div class="media">
   <a href="#" class="pull-left">
      <img src="static/images/<?php echo $row['imagen_lugar'];?>" class="img-thumbnail" alt="imagen" height="300" width="280">
   </a>
   <div class="media-body">
     <h4 class="media-heading"><?php echo $row['nombre'];?></h4>
     <p><?php echo $row['descripcion'];?></p>
       <div class="btn-toolbar" role="toolbar">
            <button type="button" class="btn btn-success" onclick="Map(<?php echo $row['posicionx'];?>,<?php echo $row['posiciony'];?>)">
            <span class="glyphicon glyphicon-map-marker"> Ver mapa</span>
            </button>
       </div>
   </div>
</div>
    <?php } ?>

    <div id="dialog" style="display: none">
        <div id="dvMap" style="height: 380px; width: 580px; color:#00FF00;">
        </div>
    </div>  
</body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
 <!-- script Mapa -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD45BhOiPtDsf5IrGAi-dM15Ds5GY7cDrA&callback=initMap"
  type="text/javascript"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
        rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        function Map(posicionx,posiciony) {
                $("#dialog").dialog({
                    modal: true,
                    title: "Mapa",
                    width: 600,
                    hright: 450,
                    buttons: {
                        
                    },
                    open: function () {
                        var mapOptions = {
                            center: new google.maps.LatLng(posicionx,posiciony),
                            zoom: 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map($("#dvMap")[0], mapOptions);

var place = new google.maps.LatLng(posicionx,posiciony);
	var marker = new google.maps.Marker({
	position: place
	, title: 'nombre'
	, map: map
	, });

//Imagen a mostrar con su ruta
//var image = new google.maps.MarkerImage(
//	'http://www.ciudadypoder.mx/wp-content/uploads/2016/06/photoEscudo_HDGO_Prismas_basalticos_AC_prismasbasalticos.jpg'
//	, new google.maps.Size(120,72));
	
//Marcador con la imagen anterior como icono
var place2 = new google.maps.LatLng(posicionx,posiciony);
var marker2 = new google.maps.Marker({
	position: place2
	, map: map
	, title: 'nombre'
	//, icon: image
	, animation: google.maps.Animation.DROP,});
                    }
                });
        }
    </script>
</html>