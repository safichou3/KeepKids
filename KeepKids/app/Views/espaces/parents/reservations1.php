<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?= "<br><br><br>" ?>
<?php
// print_r($enfants);
// print_r($_POST);
// print_r($strtotime);
// // print_r(session('id'));
echo "<pre>";
// print_r($horaires);

// print_r($capacite);
echo "</pre>";
?>

<br> <br>

<div class='card-add-reservation'>
    <form method="post" action="">
        <label>Je veux reserver :</label>


        <?php if (!isset($_POST['enfantSelect'])) { ?>
            <select name='enfantSelect'>

                <?php foreach ($enfants as $element) {
                    echo "<option value=" . $element['id'] . ">" . $element['prenom'] . " " . $element['nom'] . "</option>";
                }; ?>

            </select>

            <label>Je veux reserver pour le</label>
            <input type='date' name='date' required>
            <button type='submit'>suite</button>
        <?php  } else { ?>


            <label>de</label>
            <select name='heureOuverture'>
                <?php for ($i = 6; $i < 20; $i++) {

                    if ($i >= $horaires[0]['heureOuverture']  && $i <= ($horaires[0]['heureFermeture'] - 1) && ($horaires[0]['capacité'] - count($capacite[$i - 6])) > 0) {
                ?>
                        <option value="<?= $i ?>"><?= $i ?>H (<?= ($horaires[0]['capacité'] - count($capacite[$i - 6])) ?> places restantes)</option>
                <?php }
                }
                ?>
            </select>
            <label>à</label>
            <select name='heureFermeture'>x
                <?php for ($i = 6; $i < 20; $i++) {
                    if ($i >= ($horaires[0]['heureOuverture'] + 1)   && $i <= $horaires[0]['heureFermeture']) {
                ?>
                        <option value="<?= $i ?>"><?= $i ?>H</option>
                <?php }
                } ?>
                <input type="hidden" value="<?= $_POST['enfantSelect'] ?>" name="enfantSelect" />
                <input type="hidden" value="<?= $_POST['date'] ?>" name="date" />


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