var map = null; // carte leaflet pour affichage

function go() {
  var lon1 = document.getElementById("lon1").value;
  var lat1 = document.getElementById("lat1").value;
  var lon2 = document.getElementById("lon2").value;
  var lat2 = document.getElementById("lat2").value;
  var lon3 = document.getElementById("lon3").value;
  var lat3 = document.getElementById("lat3").value;
  var avoidFeatures = [];
  var noToll = document.getElementById("toll").checked;
  if (noToll) avoidFeatures.push("toll");
  var noBridge = document.getElementById("bridge").checked;
  if (noBridge) avoidFeatures.push("bridge");
  var noTunnel = document.getElementById("tunnel").checked;
  if (noTunnel) avoidFeatures.push("tunnel");
  var graphIdx = document.getElementById("graph").selectedIndex;
  var graph = document.getElementById("graph").options[graphIdx].value;
  var methodIdx = document.getElementById("method").selectedIndex;
  var method = document.getElementById("method").options[methodIdx].value;
  var resultDiv = document.getElementById("result");
  try {
    Gp.Services.route({
      startPoint: {
        x: lon1,
        y: lat1
      },
      endPoint: {
        x: lon3,
        y: lat3
      },
      viaPoints: [{
        x: lon2,
        y: lat2
      }],
      graph: graph,
      avoidFeature: avoidFeatures,
      routePreference: method,
      apiKey: "jhyvi0fgmnuxvfv0zjzorvdn",
      onSuccess: function(result) {
        resultDiv.innerHTML = "<p>" + JSON.stringify(result) + "</p>";
        // affichage sur la carte
        L.geoJson(result.routeGeometry).addTo(map);
      },
      onFailure: function(error) {
        resultDiv.innerHTML = "<p>" + error + "</p>";
      }
    });
  } catch (e) {
    resultDiv.innerHTML = "<p>" + e + "</p>"
  }
};
map = L.map("map").setView([48.845, 2.424], 5);
L.tileLayer(
  'https://wxs.ign.fr/jhyvi0fgmnuxvfv0zjzorvdn/geoportail/wmts?service=WMTS&request=GetTile&version=1.0.0&tilematrixset=PM&tilematrix={z}&tilecol={x}&tilerow={y}&layer=GEOGRAPHICALGRIDSYSTEMS.MAPS&format=image/jpeg&style=normal', {
    minZoom: 0,
    maxZoom: 18,
    tileSize: 256
  }).addTo(map);

var infoDiv = document.getElementById("info");
infoDiv.innerHTML = "<p> Bibliothèque d'accès version " + Gp.servicesVersion + " (" + Gp.servicesDate + ")</p>";


var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}