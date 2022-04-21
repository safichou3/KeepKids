<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title">Mes enfants & Personnes de confiance</h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<a class="link-btn-parents" href="<?= base_url(); ?>/espaces/espace_pro"><button class="access">Ajouter un enfant</button></a>


<form method="POST" action="<?= base_url(); ?>/espaces/parents/modifEnfants" enctype="multipart/form-data">
    <label>Nom</label><br>
    <input class="input-inscription" type="text" name="nom" placeholder="Nom" required><br>

    <label>Prenom</label><br>
    <input class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>

    <label>Date de Naissance</label><br>
    <input class="input-inscription" type="date" name="dateDeNaissance" placeholder="Date de naissance" required><br>

    <label>Allergies ?</label><br>
    <input class="input-inscription" type="text" name="allergies" placeholder="Allergies"><br>

    <label>Maladie(s) ?</label><br>
    <input class="input-inscription" type="text" name="maladies" placeholder="Maladies"><br>

    <label>Traitement(s) ?</label><br>
    <input class="input-inscription" type="text" name="traitements" placeholder="Traitements"><br>

    <label>Traitement(s) ?</label><br>
    <input class="textarea" type="text" name="description" placeholder="Description"><br>

    <input class="inscription" type="submit" value="Ajouter l'enfant">
</form>

<!-- foreach des enfants ici -->

<?php foreach ($enfant as $element) {
    echo "<div class='middle-parents'><div class='kids'><h3 class='title-card-parents'>" . $element["prenom"] . " " . $element["nom"] . "</h3><h4>Né(e) le: " . $element["dateDeNaissance"] . "<br>Allergie(s): " . $element["allergies"] . "<br>Maladie(s): " . $element["maladies"] . "<br>Traitement(s): " . $element["traitement"] . "<br>Description: " . $element["description"] . "<br><br><a href=" . base_url() . "/espaces/parents/mesEnfants/delete/" . $element["id"] . ">Supprimer cet enfant</a><br><a href=" . base_url() . "/espaces/parents/mesEnfants/modifEnfants/" . $element["id"] . ">Modifier cet enfant</a><button class='access'>Voir la fiche</button></h4></div></div></div>";
}
?>

<br><br>
<?= $this->endSection() ?>