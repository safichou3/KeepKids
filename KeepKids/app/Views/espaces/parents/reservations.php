<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<br> <br>
<div class="wrap-reservation">
    <div class='card-add-reservation'>
        <h2 class="section-title">Reservations</h2>
        <form>
            <input id="distance" value type="range" min="0" max="100" oninput='filtre()'>
        </form>
        <p id="compteurRange">0</p>
        <p id="listePro"></p>
    </div>
    <div id="map"></div>
</div>
<?php

$array2d = [];
foreach ($pro as $element) {
    $array = [];
    $temp =  str_replace(')', '', str_replace('(', '', $element['latLng']));
    array_push($array, $element['id'], $element['nom'], $element['prenom'], $element['nomEntreprise'], $element['email'], $element['tel'], $element['adresse'], $element['ville'], $element['cp'], $element['siret'], $element['idEtablissement'], $element['password'], $element['ville'], $element['carteId'], $element['kbis'], $element['tauxHoraire'], explode(",", $temp)[0], str_replace(' ', '', explode(",", $temp)[1]));
    array_push($array2d, $array);
}

?>

<script>
    let t = document.getElementById('distance');
    let c = document.getElementById('compteurRange');
    let liste = document.getElementById('listePro');
    // console.log('test');
    var array = <?= json_encode($array2d) ?>;
    // console.log(array);

    function filtre() {
        // console.log(t.value)
        c.innerHTML = t.value
        var latAuto, lngAuto;
        navigator.geolocation.getCurrentPosition(function(pos) {
            latAuto = pos.coords.latitude;
            lngAuto = pos.coords.longitude;
            // alert(liste);

            liste.innerHTML = ""
            for (let i = 0; i < array.length; i++) {

                if (distance(latAuto, lngAuto, array[i][16], array[i][17], "K") <= t.value) {
                    console.log(array[i]);
                    liste.innerHTML += "<h5 style='color:white;'><a href='reservations1/" + array[i][0] + "'>" + array[i][3] + " | " + array[i][6] + " " + array[i][7] + " " + array[i][8] + "</a></h5><br>";
                }

            }
        });
    }
</script>

<!-- 
<button type="button" onclick="getValues();">Latitude et longitude du pc</button> -->

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>