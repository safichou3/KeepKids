<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<h2 class="section-title">Reservations</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<form>
    <input id="distance" value type="range" min="0" max="200" oninput='filtre()'>

</form>
<?php

// foreach ($pro as $element) {
//     $element['latLng'] =  str_replace(')', '', str_replace('(', '', $element['latLng']));
//     // print_r($element['latLng']);
//     $explode = explode(",", $element['latLng']);
//     if (isset($explode[1])) {
//         echo "<script> lat22 ="  .$explode[0]. ";</script>";
//         echo "<script> lon22 ="  .$explode[1]. ";</script>";
//     }
//     // print_r(explode(",", $element['latLng']));
//     echo "Creche: ". $element['nomEntreprise'] ." <br> Distance: <button type='button' onclick='getValues();'>Latitude et longitude du pc</button> ";
// }
echo "<pre>";
// print_r($pro);
$array2d = [];
foreach ($pro as $element) {
    $array = [];
    $temp =  str_replace(')', '', str_replace('(', '', $element['latLng']));
    array_push($array, $element['id'], $element['nom'], $element['prenom'], $element['nomEntreprise'], $element['email'], $element['tel'], $element['adresse'], $element['ville'], $element['cp'], $element['siret'], $element['idEtablissement'], $element['password'], $element['ville'], $element['carteId'], $element['kbis'], $element['tauxHoraire'], explode(",", $temp)[0], str_replace(' ', '', explode(",", $temp)[1]));
    // print_r($array);
    array_push($array2d, $array);
}

// print_r($array2d);
echo "</pre>";
?>
<p id="compteurRange">0</p>
<p id="listePro"></p>
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
                    liste.innerHTML += array[i][1]
                }





            }
        });
    }
</script>


<button type="button" onclick="getValues();">Latitude et longitude du pc</button>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>