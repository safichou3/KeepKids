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

<div class='card-add-kids'>

    <h3 class='title-card-parents'>Ajouter un enfant</h3>
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

        <input class="inscription access" type="submit"  value="Ajouter l'enfant">
    </form>
</div>

    <?php foreach ($enfant as $element) {
        echo "<div class='card-add-kids'><h3 class='title-card-parents'>" . $element["prenom"] . " " . $element["nom"] . "</h3><h4>Né(e) le: " . $element["dateDeNaissance"] . "<br>Allergie(s): " . $element["allergies"] . "<br>Maladie(s): " . $element["maladies"] . "<br>Traitement(s): " . $element["traitement"] . "<br>Description: " . $element["description"] . "<br><br>
        <div class='link-btn-kids-div'>
        <a class='link-btn-kids modify' href=" . base_url() . "/espaces/parents/mesEnfants/modifEnfants/" . $element["id"] . "><i class='fi fi-rs-pencil'></i></a>
        <a class='link-btn-kids delete' href=" . base_url() . "/espaces/parents/mesEnfants/delete/" . $element["id"] . "><i class='fi fi-rs-trash'></i></a></div><button class='access'>Voir la fiche</button></h4></div>";
    }
    ?>
</div>

    <br><br>
    <?= $this->endSection() ?>