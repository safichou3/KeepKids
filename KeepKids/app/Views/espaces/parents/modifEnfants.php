<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title">Mes enfants & Personnes de confiance</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="add-kids-display">


    <?php foreach ($enfant as $element) {
        echo "<div class='card-add-kids'><h3 class='title-card-parents'>" . $element['nom'] . "</h3><form method='POST' action=" . base_url() . "/espaces/parents/modifEnfants/" .$element["id"] . " enctype='multipart/form-data'><label>Nom</label><br><input class='input-inscription' type='text' name='nom' value='" . $element['nom'] . "'required><br><label>Prenom</label><br><input class='input-inscription' type='text' name='prenom' value='" . $element['prenom'] . "'required><br><label>Date de Naissance</label><br><input class='input-inscription' type='text' name='dateDeNaissance' value='" . $element['dateDeNaissance'] . "'required><br><label>Allergie(s) ?</label><br><input class='input-inscription' type='text' name='allergies' value='" . $element['allergies'] . "'required><br><label>Maladie(s) ?</label><br><input class='input-inscription' type='text' name='maladies' value='" . $element['maladies'] . "'required><br><label>Traitement(s) ?</label><br><input class='input-inscription' type='text' name='traitement' value='" . $element['traitement'] . "'required><br><label>Description</label><br><input class='input-inscription' type='text' name='description' value='" . $element['description'] . "'required>
        <div class='link-btn-kids-div'><button class='access'>Valider</button></form>
        </div></div></h4>";
    }
    ?>

</div>

<br><br>
<?= $this->endSection() ?>