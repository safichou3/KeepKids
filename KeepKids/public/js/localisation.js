// geocoder
// window.initMap = initMap;

var geocoder;
var map;
function initialize() {
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(lat, lng);

}

function codeAddress() {
	var address = document.getElementById('address').value;
	geocoder.geocode({ 'address': address }, function (results, status) {

		document.getElementById("inputCache").value = results[0].geometry.location;

		// alert(results[0].geometry.location)

	});
}

// auto geolocalisation
var latAuto, lngAuto;
navigator.geolocation.getCurrentPosition(function (pos) {
	latAuto = pos.coords.latitude;
	lngAuto = pos.coords.longitude;
});

// Convertions
function distance(lat1, lon1, lat2, lon2, unit) {
	if ((lat1 == lat2) && (lon1 == lon2)) {
		return 0;
	}
	else {
		var radlat1 = Math.PI * lat1 / 180;
		var radlat2 = Math.PI * lat2 / 180;
		var latLon = (lat2, lon2);
		var theta = lon1 - lon2;
		var radtheta = Math.PI * theta / 180;
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		if (dist > 1) {
			dist = 1;
		}
		dist = Math.acos(dist);
		dist = dist * 180 / Math.PI;
		dist = dist * 60 * 1.1515;
		if (unit == "K") { dist = dist * 1.609344 }
		if (unit == "N") { dist = dist * 0.8684 }
		return dist;
	}
}
// filtrages par km
function get25km() {
	if (distance(lat, lng, 48.864716, 2.349014, "K") >= 25) {
		alert('distance supp a 25.00')
	} else alert('distance inf a 25.00');
}
function get10km() {
	if (distance(lat, lng, 48.864716, 2.349014, "K") >= 10) {
		alert('distance supp a 10')
	} else alert('distance inf a 10');
}

// alertes
function getValues() {
	lat2 = 1.25626;
	lon2 = 2.28459;

	alert(distance(latAuto, lngAuto, lat2, lon2, "K"));
}
