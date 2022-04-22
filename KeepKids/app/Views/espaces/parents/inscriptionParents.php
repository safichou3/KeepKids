<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
<h1 class="section-title-parents">Inscription parents</h1>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-form body-ins-parents body-parents">
    <form method="POST" action="<?= base_url(); ?>/espaces/parents/inscriptionParents" enctype="multipart/form-data">
        <label>Nom</label><br>
        <input class="input-inscription" type="text" name="nom" placeholder="Nom" required><br>

        <label>Prenom</label><br>
        <input class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>

        <label>Email</label><br>
        <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

        <label>Téléphone</label><br>
        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required><br>

        <label>Adresse</label><br>
        <input class="input-inscription" type="text" name="adresse" placeholder="adresse"><br>

        <label>Mot de passe</label><br>
        <input class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>

        <input class="inscription" type="submit" value="Je m'inscris">
    </form>
    <a class="link-co-ins" href="<?= base_url(); ?>/espaces/parents/connexionParents">J'aimerais me connecter</a>
</div>
<?= $this->endSection() ?>