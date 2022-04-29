<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/localisation.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>
<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>