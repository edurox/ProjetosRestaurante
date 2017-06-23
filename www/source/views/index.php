<?php
    require_once APP_PATH . '/Restaurante.php';

    /**
     *  Titulo e descrição da página
     */
    $title = "BUSCADOR DE RESTAURANTES";
    $description = "BUSCADOR DE RESTAURANTES";
?>

<div id="map"></div>

<?php
    $restauranteObj = new Restaurante();
    $restaurantes = $restauranteObj->getAll();

    print_r($restaurantes);
?>

<script>
function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -34.397, lng: 150.644},
		zoom: 12,
		scrollwheel: false
	});
	var infoWindow = new google.maps.InfoWindow({map: map});

    setMarkers(map);

	// Try HTML5 geolocation.
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};

			infoWindow.setPosition(pos);
			infoWindow.setContent('Location found.');
			map.setCenter(pos);
		}, function() {
			handleLocationError(true, infoWindow, map.getCenter());
		});
	} else {
		// Browser doesn't support Geolocation
		handleLocationError(false, infoWindow, map.getCenter());
	}
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeolocation ?
		'Error: The Geolocation service failed.' :
		'Error: Your browser doesn\'t support geolocation.');
}

function setMarkers(map){
    var Markers = {};

    var locations = [
        <?php
            foreach($restaurantes as $key => $row) { ?>
                [
                    '<?= $row["nome_restaurante"] ?>',
                    '<div id="content">'+ '<h1 style="font-size:15px"><?= $row['nome_restaurante'] ?></h1>'+ '<p><?= utf8_encode($row['endereco']) ?></p>'+ '</div>',
                    <?= $row["latitude"] ?>,
                    <?= $row["longitude"] ?>,
                    1
                ],
        <?php
            }
        ?>
    ];
    infowindow = new google.maps.InfoWindow();

    for(i=0; i<locations.length; i++) {
        var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
        var marker = new google.maps.Marker({
            position: position,
            map: map,
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(locations[i][1]);
                infowindow.setOptions({maxWidth: 200});
                infowindow.open(map, marker);
            }
        }) (marker, i));
        Markers[locations[i][4]] = marker;
    }


}

</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjIS5JjMOF-j4OFdyxMVkFpbW4i5ac4hc&callback=initMap"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
