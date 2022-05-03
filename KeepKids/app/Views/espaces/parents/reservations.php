<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<h2 class="section-title">Reservations</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?php

foreach ($pro as $element) {
    $element['latLng'] =  str_replace(')', '', str_replace('(', '', $element['latLng']));
    // print_r($element['latLng']);
    $explode = explode(",", $element['latLng']);
    if (isset($explode[1])) {
        echo "<script> lat22 ="  .$explode[0]. ";</script>";
        echo "<script> lon22 ="  .$explode[1]. ";</script>";
    }
    // print_r(explode(",", $element['latLng']));
    echo "Creche: ". $element['nomEntreprise'] ." <br> Distance: <button type='button' onclick='getValues();'>Latitude et longitude du pc</button> ";
}
//print_r($pro);
?>
<button type="button" onclick="getValues();">Latitude et longitude du pc</button>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>