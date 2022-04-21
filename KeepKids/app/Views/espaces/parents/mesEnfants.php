<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title">Mes enfants & Personnes de confiance</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="btn-add-kids-div">
    <a class="link-btn-parents" href="<?= base_url(); ?>/espaces/espace_pro"><button class="btn-add-kids">Ajouter un enfant</button></a>
</div>

<!-- foreach des enfants ici -->




<div class="add-kids-display">
    <?php foreach ($enfant as $element) {
        echo "<div class='card-add-kids'><h3 class='title-card-parents'>" . $element["prenom"] . " " . $element["nom"] . "</h3><h4>Né(e) le: " . $element["dateDeNaissance"] . "<br>Allergie(s): " . $element["allergies"] . "<br>Maladie(s): " . $element["maladies"] . "<br>Traitement(s): " . $element["traitement"] . "<br>Description: " . $element["description"] . "<br><br>
        <div class='link-btn-kids-div'>
        <a class='link-btn-kids modify' href=" . base_url() . "/news/modify/" . $element["id"] . ">Modifier</a>
        <a class='link-btn-kids delete' href=" . base_url() . "/news/delete/" . $element["id"] . "><i class='fi fi-rs-trash'></i></a></div><button class='access'>Voir la fiche</button></h4></div>";
    }
    ?>
</div>

<!-- Ajouter un enfant -->

<br><br>
<?= $this->endSection() ?>