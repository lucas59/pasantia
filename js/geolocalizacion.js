/* global google, infoWindow */
/* global google, infoWindow */
$("#localizar").click(function () {
    navigator.geolocation.getCurrentPosition(function (position) {
        map = new google.maps.Map(document.getElementById('map'));
        var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };
        map.setCenter(pos);
        infoWindow.setContent('Posicion actual');
        infoWindow.open(map);
    });
});
