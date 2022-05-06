<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title">Admin</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

espace admin
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>