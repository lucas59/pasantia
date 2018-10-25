<html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css"/>
        <title>Geolocation</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <style>
            /* Always set the map height explicitly to define the size of the div
            * element that contains the map. */
            #map {
                height: 90%;
                width: 100%;
            }
            /* Optional: Makes the sample page fill the window. */
            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }
        </style>
    </head>
    <body style="background-color: #007bff">
        <input id="localizar" type="button" class="botonimagen btn btn-primary btn-lg" value="Buscame"/>
        <br>
        <div id="map"></div>
        <script>
            // Note: This example requires that you consent to location sharing when
            // prompted by your browser. If you see the error "The Geolocation service
            // failed.", it means you probably did not give permission for the browser to
            // locate you.
            var map, infoWindow;
            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    mapTypeControlOptions: {
                        mapTypeIds: ['roadmap'],
                    },
                    disableDefaultUI: true
                    ,
                    styles: [
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi.medical",
                            "stylers": [
                                {
                                    "visibility": "off"
                                },
                                {
                                    "weight": 5
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        }
                    ]
                });
                infoWindow = new google.maps.InfoWindow;
                var pos = new google.maps.LatLng(-32.3209812, -58.0799678);
                map.setCenter(pos);
                google.maps.event.addListener(map, 'click', function (e) {

                    //Determine the location where the user has clicked.
                    var location = e.latLng;
                    //Create a marker and placed it on the map.
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        icon: {
                            url: "/img/icono_mas.png",
                            scaledSize: new google.maps.Size(35, 40)
                        }
                    });
                    //Attach click event handler to the marker.
                    google.maps.event.addListener(marker, "click", function (e) {
                        var infoWindow = new google.maps.InfoWindow({
                            content: 'Latitude: ' + location.lat() + '<br />Longitude: ' + location.lng()
                        });
                        infoWindow.open(map, marker);
                    });
                    google.maps.event.addListener(marker, "dblclick", function (e) {
                        ok = confirm("Segura que desea eliminar esta volqueta?");
                        marker.setMap(null);
                    });
                }
                );
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD54tM7ElFXcXcXvvfZTuFrxMySD-nUcag&callback=initMap">
        </script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="../js/geolocalizacion.js"></script>
    </body>
</html>