<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title">Reservations</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class='card-add-reservation'>
    <select class="input-inscription" name="relation">
        <option value="">Selectionnez un enfant</option>
    </select>
    <br>
    <select class="input-inscription" name="relation">
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
</div>

<?= $this->endSection() ?>