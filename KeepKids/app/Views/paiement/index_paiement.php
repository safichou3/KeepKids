<?= $this->extend('master') ?>


<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('title') ?>
<h2 class="section-title"></h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form method="post" action="paiement.php">
    <label for="prix">Prix :</label>
    <input type="text" name="prix" id="prix">
    <button>Procéder au paiement</button>
</form>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://js.stripe.com/v3/"></script>
<script src="stripe.js"></script>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>