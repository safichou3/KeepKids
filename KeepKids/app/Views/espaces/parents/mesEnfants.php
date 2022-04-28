<?= $this->extend('master') ?>


<?= $this->section('css') ?>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>

<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('title') ?>
<h2 class="section-title"><br></h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<details>
    <summary>
        <div class="buttonPurple">
            Ajouter un enfant
        </div>
    </summary>
    <div class="details-modal-content">

        <form method="POST" action="<?= base_url(); ?>/espaces/parents/mesEnfants/" enctype="multipart/form-data">

            <label>Nom</label><br>
            <input class="input-inscription" type="text" name="nom" placeholder="Nom" required><br>

            <label>Prenom</label><br>
            <input class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>

            <label>Date de Naissance</label><br>
            <input class="input-inscription" type="date" name="dateDeNaissance" placeholder="Date de naissance" required><br>

            <label>Allergies ?</label><br>
            <input class="input-inscription" type="text" name="allergies" placeholder="Si oui, indiquez la/les."><br>

            <label>Maladie(s) ?</label><br>
            <input class="input-inscription" type="text" name="maladies" placeholder="Si oui, indiquez la/les."><br>

            <label>Traitement(s) ?</label><br>
            <input class="input-inscription" type="text" name="traitement" placeholder="Si oui, indiquez le/les."><br>

            <label>Régime Alimentaire ?</label><br>
            <textarea class="input-inscription" name="description" placeholder="Si oui, indiquez le."></textarea><br>

            <label>Carnet de vaccination</label><br>
            <input class="input-inscription" type="file" name="carnetVaccin" accept="application/pdf"><br>

            <label>Certificat médical</label><br>
            <input class="input-inscription" type="file" name="certificat" accept="application/pdf"><br>


            <input class="inscription access" type="submit" value="Ajouter l'enfant">
        </form>

    </div>
</details>


<div class="add-kids-display">

    <?php
    if (empty($enfant)) {
        echo "pas d'enfant";
    }
    ?>
    <?php foreach ($enfant as $element) {

        echo "<div class='card-add-kids'>
        <h3 class='title-card-parents'>" . $element["prenom"] . " </br> " . $element["nom"] . "</h3>
        <h4>Né(e) le: " . $element["dateDeNaissance"] . "<br>
        Allergie(s): " . $element["allergies"] . "<br>
        Maladie(s): " . $element["maladies"] . "<br>
        Traitement(s): " . $element["traitement"] . "<br>
        Régime Alimentaire: " . $element["description"] . "<br>
        
        
        
        <br>
        <div class='link-btn-kids-div'>
        <a class='link-btn-kids vaccin' href='" . base_url() . "/upload/carnetVaccin/" . $element["carnetVaccin"] . "' download><i class='fi fi-rs-syringe'></i></i></a>
        <a class='link-btn-kids certificat' href='" . base_url() . "/upload/certificat/" . $element["certificat"] . "' download><i class='fi fi-sr-stethoscope'></i></a><br>
        <a class='link-btn-kids modify' href=" . base_url() . "/espaces/parents/modifEnfants/" . $element["id"] . $element["id"] . "><i class='fi fi-rs-pencil'></i></a>
        <a class='link-btn-kids delete' href=" . base_url() . "/espaces/parents/mesEnfants/delete/" . $element["id"] . "><i class='fi fi-rs-trash'></i></a></div><button class='access'>Reserver</button></h4></div>";
    }
    ?>
</div>
<br>
<details>
    <summary>
        <div class="buttonPurple">
            Ajouter un accompagnateur
        </div>
    </summary>
    <div class="details-modal-content">

        <form method="POST" action="<?= base_url(); ?>/espaces/parents/accompagnateur/" enctype="multipart/form-data">

            <label>Nom</label><br>
            <input class="input-inscription" type="text" name="nomAccompagnant" placeholder="Nom" required><br>

            <label>Prenom</label><br>
            <input class="input-inscription" type="text" name="prenomAccompagnant" placeholder="Prenom" required><br>

            <label>Relation avec l'enfant</label><br>
            <select class="input-inscription"  name="relation">
                <option value="">Qu'elle est votre relation avec l'enfant ?</option>
                <option value="fraterie">Fraterie</option>
                <option value="parents">Parents</option>
                <option value="nounou">Nounou</option>
                <option value="amie">Amie</option>
                <option value="autre">Autre</option>

            </select>

            <input class="inscription access" type="submit" value="Ajouter l'accompagnateur">
        </form>

    </div>
</details>


<div class="add-kids-display">

    <?php
    if (empty($accompagnant)) {
        echo "pas d'accompagnant";
    }
    ?>

    <?php foreach ($accompagnant as $element) {
        echo "<div class='card-add-kids'>
        <h3 class='title-card-parents'>" . $element["prenomAccompagnant"] . " </br> " . $element["nomAccompagnant"] . "</h3>
        <h4>Nom: " . $element["nomAccompagnant"] . "<br>
        Prénom: " . $element["prenomAccompagnant"] . "<br>
        Relation: " . $element["relation"] . "<br>
        
        <br>
        <div class='link-btn-kids-div'>
        <a class='link-btn-kids modify' href=" . base_url() . "/espaces/parents/modifEnfants/" . $element["id"] . $element["id"] . "><i class='fi fi-rs-pencil'></i></a>
        <a class='link-btn-kids delete' href=" . base_url() . "/espaces/parents/mesEnfants/deleteAccompagnant/" . $element["id"] . "><i class='fi fi-rs-trash'></i></a></div><button class='access'>Reserver</button></h4></div>";
    }
    ?>
</div>
<br><br>

<?= $this->endSection() ?>