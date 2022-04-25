<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<h2 class="section-title-pro">Inscription pro</h2>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="body-form body-co-pro body-pro">
    <!-- <h1>Inscription pro</h1>  -->
    <form method="POST" action="<?= base_url(); ?>/espaces/pro/inscriptionPro" enctype="multipart/form-data">
        <label>Nom</label><br>
        <input id="nom" class="input-inscription" type="text" name="nom" placeholder="Nom" required><br>
        <span id="onlyText">Chiffres interdits</span><br>

        <label>Prénom</label><br>
        <input id="prenom" class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>
        <span id="onlyTexte">Chiffres interdits</span><br>

        <label>Nom de l'Entreprise</label><br>
        <input class="input-inscription" type="text" name="nomEntreprise" placeholder="Prenom" required><br>

        <label>Email</label><br>
        <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

        <label>Téléphone</label><br>
        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required><br>

        <label>Adresse</label><br>
        <input class="input-inscription" type="text" name="adresse" placeholder="adresse"><br>

        <label>Siret</label><br>
        <input id="siretImput" class="input-inscription" type="number" name="siret" placeholder="siret"><br>
        <span id="siretERROR">14 nombres</span><br><br>
        <label>Carte d'Id | Passeport | Permis de conduire</label><br>
        <input class="input-inscription" type="text" name="carteId" required><br>

        <label>Extrait de kbis</label><br>
        <input class="input-inscription" type="text" name="kbis" required><br>

        <label>Type d'Etablissement</label><br>
        <input class="input-inscription" type="number" name="idEtablissement" required><br>

        <label>Mot de passe</label><br>
        <input id="passwordInput" class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>
        <div class="errors">
            <span id="passwordErrorMajuscule">1 majuscule |</span>
            <span id="passwordErrorMinuscule">1 minuscule |</span>
            <span id="passwordErrorNombre">1 chiffre |</span><br>
            <span id="passwordErrorSpecial">1 caractère special |</span>
            <span id="passwordErrorSize">8 caractères minimum</span>
        </div>
        <input onclick="validate()" class="inscription" type="submit" value="Je m'inscris" name="inscriptionPro">
    </form>
    <a class="link-co-ins" href="<?= base_url(); ?>/espaces/pro/connexionPro">J'aimerais me connecter</a>
</div>
<a href="<?= base_url(); ?>/espaces/pro/connexionPro">J'aimerais me connecter</a>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>