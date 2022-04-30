                 
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <!-- <meta name="description" content="Visualize Data from Interactive Map Layer on Map">
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>

  <script>window.ENV_VARIABLE = 'developer.here.com'</script><script src='../iframeheight.js'></script></head> -->
  <body>
    <div class="page-header">


<button onclick="getLocation()" id="auto-lo">auto localisation</button>
<button type="button" id="auto-loc" onclick="getValue();">Récupérer la valeur</button>
<p id="demo"></p>
    <script type="text/javascript" src='localisation.js'></script>
  </body>
</html>
               

// Localisation

// function addIml(map) {
//     const catalogHrn = 'hrn:here:data::olp-here:dh-showcase-dc-transit';
//     const layerId = 'dc-transit';
//     const service = platform.getIMLService();
//     const imlProvider = new H.service.iml.Provider(service, catalogHrn, layerId);

//     const style = imlProvider.getStyle();
//     const styleConfig = style.extractConfig(['iml']);

//     styleConfig.layers.iml.lines.draw.lines.dash = [1, 1];

//     styleConfig.layers.iml.lines.draw.lines.width = [[5, 5000], [8, 800], [10, 200], [12, 160], [14, 60], [18, 20]];

//     style.mergeConfig(styleConfig);

//     map.addLayer(new H.map.layer.TileLayer(imlProvider));
// }




// const platform = new H.service.Platform({
//     apikey: 'wuhhFoo3HHQ8Bxw68fCZe8iA_J9v4dBnRhSbkAlMup4'
// });
// const defaultLayers = platform.createDefaultLayers();

// const map = new H.Map(
//     document.getElementById('map'),
//     defaultLayers.vector.normal.map,
//     {
//         center: new H.geo.Point(49.4313075, 1.0914433),
//         zoom: 12
//     }
// );
// window.addEventListener('resize', () => map.getViewPort().resize());


// const behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// const ui = H.ui.UI.createDefault(map, defaultLayers);

// addIml(map);


// CODE EN JS POUR L'autogeolocalisation://
var x = document.getElementById("demo");
var y = document.getElementById("demo2");
function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}

function showPosition(position) {
	x.innerHTML = position.coords.latitude;
	y.innerHTML = position.coords.longitude;

	
}

// CODE EN JS POUR récuperer la valeur de l'imput//
function getValue() {
    // Sélectionner l'élément input et récupérer sa valeur
    

}

getLocation()
var lat = document.getElementById("demo").textContent;
    var lon = document.getElementById("demo2").textContent;


    // Afficher la valeur
    alert(x.textContent);
    alert(y.textContent);
// alert(calcCrow(x, y, 48.85341, 2.3488).toFixed(1));
function calcCrow(lat1, lon1, lat2, lon2)      {       var R = 6371;      
	var dLat = toRad(lat2-lat1);       
	var dLon = toRad(lon2-lon1);       
	var lat1 = toRad(lat1);       
	var lat2 = toRad(lat2);        
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +         
	Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2);        
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));        
	var d = R * c;       return d;     }      
	
	function toRad(Value)      {         
		return Value * Math.PI / 180;     } 


    -------------------------------
    <?php 
echo "<pre>";
print_r($enfant);
echo "</pre>";

?>
<div class='card-add-reservation'>
    <form method="POST" action="<?= base_url(); ?>/espaces/parents/reservation" enctype="multipart/form-data">
        <select class="input-inscription" name="idEnfant">
            <?php foreach ($enfant as $element) {
                echo "<option value=>Selectionnez un enfant</option>";
            }
            ?>
        </select>
        <br>
        <select class="input-inscription" name="idEtablissement">
            <option value="">Selectionnez votre type de garde</option>
        </select>
        <br>
        <div class="range-slider">
            <input class="range-slider__range" type="range" value="25" min="0" max="150">
            <span class="range-slider__value"></span>
        </div>
        <h4>
            <button class='continuer'>Continuer</button>
        </h4>
    </form>
</div>

<button onclick="getLocation()" id="auto-lo">auto localisation</button>
<button type="button" id="auto-loc" onclick="getValue();">Récupérer la valeur</button>
<p id="demo"></p>
<p id="demo2"></p>
            