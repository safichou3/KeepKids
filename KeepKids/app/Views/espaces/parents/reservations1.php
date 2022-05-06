<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?= "<br><br><br>" ?>
<?php
print_r($enfants);
print_r($_POST);
// print_r($strtotime);
// print_r(session('id'));
print_r($capacite);
print_r($horaires);
?>

<br> <br>

<div class='card-add-reservation'>
    <form method="post" action="">
        <label>Je veux reserver pour:</label>


        <?php if (!isset($_POST['enfantSelect'])) { ?>
            <select name='enfantSelect'>

                <?php foreach ($enfants as $element) {
                    echo "<option value=" . $element['id'] . ">" . $element['prenom'] . " " . $element['nom'] . "</option>";
                }; ?>

            </select>

            <label>Je veux reserver pour le</label>
            <input type='date' name='date'>
            <button type='submit'>suite</button>
        <?php  } else { ?>


            <label>de</label>
            <select name='heureOuverture'>

            </select>
            <label>à</label>
            <select name='heureFermeture'>

            </select>
            <button type='submit'>envoyer</button>

        <?php } ?>

    </form>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>