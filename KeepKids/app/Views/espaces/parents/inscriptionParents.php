<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<h1>Inscription parents</h1>
<div class="body-inscription">
    <form method="POST" action="<?= base_url(); ?>/espaces/parents/inscriptionParents" enctype="multipart/form-data">
        <label>Nom</label><br>
        <input id="nom" class="input-inscription" type="text" name="nom" placeholder="Nom" onkeyup="onlyText();" required><br>
        <span id="onlyText">pas de nombre</span><br>

        <br>
        <label>Prenom</label><br>
        <input id="prenom" class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>
        <span id="onlyTexte">pas de nombre</span><br>

        <label>Email</label><br>
        <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

        <label>Téléphone</label><br>
        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required><br>

        <label>Adresse</label><br>
        <input class="input-inscription" type="text" name="adresse" placeholder="adresse"><br>

        <label>Mot de passe</label><br>
        <input id="passwordInput" class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>
        <div class="errors">
            <span id="passwordErrorMajuscule">1 majuscule</span>
            <span id="passwordErrorMinuscule">1 minuscule</span>
            <span id="passwordErrorNombre">1 chiffre</span>
            <span id="passwordErrorSpecial">1 caractère special</span>
            <span id="passwordErrorSize">8 caractères minimum</span>
        </div>
        <input onclick="validate()" class="inscription" type="submit" value="Je m'inscris">


    </form>
    <a class="link-co-ins" href="<?= base_url(); ?>/espaces/parents/connexionParents">J'aimerais me connecter</a>
</div>
<a href="<?= base_url(); ?>/espaces/parents/connexionParents">J'aimerais me connecter</a>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>