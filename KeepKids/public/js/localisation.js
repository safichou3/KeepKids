// localisation
var lat, lng;
navigator.geolocation.getCurrentPosition(function (pos) {
	lat = pos.coords.latitude;
	lng = pos.coords.longitude;
});

function distance(lat1, lon1, lat2, lon2, unit) {
	if ((lat1 == lat2) && (lon1 == lon2)) {
		return 0;
	}
	else {
		var radlat1 = Math.PI * lat1 / 180;
		var radlat2 = Math.PI * lat2 / 180;
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
function getValue() {
	// alert('Lat:' + lat + 'Lng :' + lng);
	alert(distance(lat, lng, 48.864716, 2.349014, "K"));
}
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

// geocoder
window.initMap = initMap;

var geocoder;
var map;
function initialize() {
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(lat, lng);

}

function codeAddress() {
	var address = document.getElementById('address').value;
	geocoder.geocode({ 'address': address }, function (results, status) {

		alert(results[0].geometry.location)

	});
}

// afficher la position

var x = document.getElementById("coordinate");
var y = document.getElementById("json");

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	x.innerHTML =
		"Latitude: " +
		position.coords.latitude +
		"<br>Longitude: " +
		position.coords.longitude;

	//Create query for the API.
	var latitude = "latitude=" + position.coords.latitude;
	var longitude = "&longitude=" + position.coords.longitude;

	var query = latitude + longitude + "&localityLanguage=fr";

	const Http = new XMLHttpRequest();

	var bigdatacloud_api =
		"https://api.bigdatacloud.net/data/reverse-geocode-client?";

	bigdatacloud_api += query;

	Http.open("GET", bigdatacloud_api);
	Http.send();

	Http.onreadystatechange = e => {
		y.innerHTML += Http.responseText;
	};
}
