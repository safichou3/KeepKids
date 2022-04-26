<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="add-kids-body">
    <h1 class="section-title add-kids-title">Mes enfants & Personnes de confiance</h1>
    <div class="add-kids-display">

        <div class='card-add-kids add-kids-card-form'>
            <h3 class='title-card-parents'>Ajouter un enfant</h3>
            <form method="POST" action="<?= base_url(); ?>/espaces/parents/mesEnfants/" enctype="multipart/form-data">

                <label>Nom</label><br>
                <input class="input-inscription" type="text" name="nom" placeholder="Nom" required><br>

                <label>Prenom</label><br>
                <input class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>

                <label>Date de Naissance</label><br>
                <input class="input-inscription date-add-kids" type="date" name="dateDeNaissance" placeholder="Date de naissance" required><br>

                <label>Allergies ?</label><br>
                <input class="input-inscription" type="text" name="allergies" placeholder="Allergies"><br>

                <label>Maladie(s) ?</label><br>
                <input class="input-inscription" type="text" name="maladies" placeholder="Maladies"><br>

                <label>Traitement(s) ?</label><br>
                <input class="input-inscription" type="text" name="traitement" placeholder="Traitements"><br>

                <label>Régime Alimentaire</label><br>
                <!-- <input class="textarea" type="text" name="description" placeholder="Description"><br> -->
                <textarea class="input-inscription" type="text" name="description" placeholder="Régime Alimentaire"></textarea><br>

                <input class="inscription access btn-add-kids" type="submit" value="Ajouter l'enfant">
            </form>
        </div>

        <?php foreach ($enfant as $element) {
            echo "<div class='card-add-kids'><h3 class='title-card-parents'>" . $element["prenom"] . " " . $element["nom"] . "</h3><h4>Né(e) le: " . $element["dateDeNaissance"] . "<br>Allergie(s): " . $element["allergies"] . "<br>Maladie(s): " . $element["maladies"] . "<br>Traitement(s): " . $element["traitement"] . "<br>Description: " . $element["description"] . "<br><br>
        <div class='link-btn-kids-div'>
        <a class='link-btn-kids modify' href=" . base_url() . "/espaces/parents/modifEnfants/" . $element["id"] . $element["id"] . "><i class='fi fi-rs-pencil icons-add-kids'></i></a>
        <a class='link-btn-kids delete' href=" . base_url() . "/espaces/parents/mesEnfants/delete/" . $element["id"] . "><i class='fi fi-rs-trash icons-add-kids'></i></a></div><button class='access'>Voir la fiche</button></h4></div>";
        }
        ?>
    </div>
</div>
<br><br>
<?= $this->endSection() ?>