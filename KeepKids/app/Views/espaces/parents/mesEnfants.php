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

<!-- foreach des enfants ici -->

    
        
        

    <?php foreach ($enfant as $element) {
         echo "<div class='middle-parents'><div class='kids'><h3 class='title-card-parents'>".$element["prenom"]. " " .$element["nom"]."</h3><h4>Né(e) le: ". $element["dateDeNaissance"] . "<br>Allergie(s): ". $element["allergies"] . "<br>Maladie(s): ". $element["maladies"] . "<br>Traitement(s): ". $element["traitement"] . "<br>Description: ". $element["description"] . "<br><br><a class='link-btn-parents' href='" . base_url() . "/espaces/espace_pro'></a><a href=" . base_url() . "/news/delete/" . $element["id"]. ">Supprimer cet enfant</a><br><a href=" .base_url() . "/news/modify/" . $element["id"] .">Modifier cet enfant</a><button class='access'>Voir la fiche</button></h4></div></div></div>";
    }
    ?>


<!-- Ajouter un enfant -->

<br><br>
<?= $this->endSection() ?>