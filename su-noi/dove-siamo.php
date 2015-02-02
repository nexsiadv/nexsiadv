<?php 
	$menu['su-noi']='class="active"';
	$menu_sec['voce4']='class="active"';
	include("../conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Dove siamo, indirizzo e indicazioni stradali di admize srl">
<meta name="keywords" content="dove siamo, indiacazioni stradali, mappa, uffici, ufficio, sede legale">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>Dove siamo, indirizzo e indicazioni stradali di admize srl</title>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=it&amp;key=ABQIAAAAzqsavBJCgG867oSmqSeLyBTtth_er7mFMtpWXhZZPzvbi9Ka7RR80ELa7nUGZVq6bHYsFkjcKXaDJw"></script>
<?php @include($server_pth."inc_web/header-util.php"); ?>
<script type="text/javascript">

var directionsService = new google.maps.DirectionsService();
var directionsDisplay = new google.maps.DirectionsRenderer();

function initialize() {
	var latlng = new google.maps.LatLng(43.56695, 10.33908);
	var autostrada = new google.maps.LatLng(43.61731232316635, 10.356674194335938);
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var image = '<?php echo $server_url; ?>images/logo_map.png';
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	directionsDisplay.setMap(map);
	directionsDisplay.setPanel(document.getElementById("panel"));
	
	var marker = new google.maps.Marker({
		position: latlng,
		map: map,
		icon: image
	});
	
	// Crea il codice per il tooltip di info 
	var tooltip = '<div id="tooltip">'+
        '<h3>Admize Srl</h3>'+
        '<p>Via Nicolodi 54,<br>'+
        '57121 Livorno (Italy).<br>'+
        'Mail: <a href="mailto:info@admize.it">info@admize.it</a><br>'+
        'Telefono: (+39) 0586 405267</p>'+
        '</div>';
		
    var infowindow = new google.maps.InfoWindow({
        content: tooltip
    });
	
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.open(map,marker);
    });
	
	/*document.getElementById("submitmap").onclick = function() {
		calcRoute();
	}*/
  	// To add the marker to the map, call setMap();
  	marker.setMap(map);
}

// Calcola il percorso
function calcRoute() {
    var partenza = document.getElementById("partenza").value;
    var arrivo = document.getElementById("arrivo").value;
    var request = {
        origin:partenza, 
        destination:arrivo,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
		if (status == google.maps.DirectionsStatus.OK) {
			directionsDisplay.setDirections(response);
		}
	});
}
</script>
</head>
<body onLoad="initialize()">
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title noi">Su di noi</h2>
</div>

<div id="content" class="clearfix">
    <div class="sx">
        <div class="box standard">
        	<?php @include("inc_web/menu.php"); ?>
        </div>
    </div>
    <div class="dx">
        <div class="clearer forty"></div>
        <div class="googlemap" id="map_canvas"></div>
        <div class="clearer ten"></div>
        <div style="floating: left;">
            <label><strong>Come arrivi?</strong>
                <select id="partenza" onChange="calcRoute();">
                    <option value="">--</option>
                    <option value="Piazza Dante - livorno">dalla stazione FS</option>
                    <option value="Piazzale Corradino D'Ascanio - pisa">dall'aereoporto</option>
                </select>
                <input type="hidden" id="arrivo" value="Via Nicolodi 54 - livorno">
                <?php //<input id="submitmap" type="submit" value="trova percorso sulla mappa"> ?>
            </label>
        </div>
        <div class="clearer ten"></div>
        <div id="panel"></div>
    </div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
