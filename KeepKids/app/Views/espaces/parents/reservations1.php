<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?php print_r($enfants); ?>
<?php print_r($_POST); ?>

<br> <br>

<div class='card-add-reservation'>
    <form method="post" action="">
        <label>Je veux reserver pour:</label>


        <?php if (!isset($_POST['enfantSelect'])) {
            echo "<select name='enfantSelect'>";
            foreach ($enfants as $element) {
                echo "<option value=" . $element['id'] . ">" . $element['prenom'] . " " . $element['nom'] . "</option>";
            };
            echo '</select>';

            echo "<label>Je veux reserver pour le</label>";
            echo "<input type='date'>";
            echo "<button type='submit'>suite</button>";
        } else {
            print_r($horaires);

            echo "<label>de</label>";
            echo "<input type='date' min='' max=''>";

            echo "<label>à</label>";
            echo "<input type='date' min='' max=''>";

            echo "<button type='submit'>envoyer</button>";
        }
        ?>
    </form>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>