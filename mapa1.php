<html>
<head>
    <title></title>
    <script>
      var map;
      function initMap() {
        
      }
    </script>
</head>
<body>
  
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD45BhOiPtDsf5IrGAi-dM15Ds5GY7cDrA&callback=initMap"
  type="text/javascript"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
    <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
        rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        function Map() {
                $("#dialog").dialog({
                    modal: true,
                    title: "Mapa",
                    width: 600,
                    hright: 450,
                    buttons: {
                        
                    },
                    open: function () {
                        var mapOptions = {
                            center: new google.maps.LatLng(20.2352149,-98.5605357),
                            zoom: 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map($("#dvMap")[0], mapOptions);

var place = new google.maps.LatLng(20.2352149,-98.5605357);
	var marker = new google.maps.Marker({
	position: place
	, title: 'Huasca de Ocampo'
	, map: map
	, });

//Imagen a mostrar con su ruta
var image = new google.maps.MarkerImage(
	'http://www.ciudadypoder.mx/wp-content/uploads/2016/06/photoEscudo_HDGO_Prismas_basalticos_AC_prismasbasalticos.jpg'
	, new google.maps.Size(120,72));
	
//Marcador con la imagen anterior como icono
var place2 = new google.maps.LatLng(20.2352200,-98.6005400);
var marker2 = new google.maps.Marker({
	position: place2
	, map: map
	, title: 'Prismas basalticos'
	, icon: image
	, animation: google.maps.Animation.DROP,});
                    }
                });
    }
    </script>

    <input id="btnShow" type="button" value="Ver Mapa" />
    <button type="button" onclick="Map()">
    ver mapa
    </button>
    <div id="dialog" style="display: none">
        <div id="dvMap" style="height: 380px; width: 580px; color:#00FF00;">
        </div>
    </div>

</body>
</html>
