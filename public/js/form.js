$(document).ready(function() {
    var Geo={};

    if (navigator.geolocation) {
    	navigator.geolocation.getCurrentPosition(success, error);
    }

    //Get the latitude and the longitude;
    function success(position) {
    	Geo.lat = position.coords.latitude;
    	Geo.lng = position.coords.longitude;
    	populateHeader(Geo.lat, Geo.lng);
    }

    function error(){
    	console.log("Geocoder failed");
    }

    function populateHeader(lat, lng){
    	$('#latitude').val(lat);
    	$('#longitude').val(lng);
    }
});