<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title">Reservations</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>


<button type="button" onclick="getValues();">Latitude et longitude du pc</button>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>