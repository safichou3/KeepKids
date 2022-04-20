<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Je suis un parent
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-inscription">
<form action="" method="POST" action="<?= base_url(); ?>/inscription" enctype="multipart/form-data">
    <label>Prénom</label><br>
    <input class="input-inscription" type="text" name="nom" placeholder="Prénom" required><br>

    <label>Nom</label><br>
    <input class="input-inscription" type="text" name="prenom" placeholder="Nom" required><br>

    <label>Email</label><br>
    <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

    <label>Téléphone</label><br>
    <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required><br>

    <label>Adresse</label><br>
    <input class="input-inscription" type="text" placeholder="adresse"><br>

    <label>Mot de passe</label><br>
    <input class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>

    <input class="inscription" type="submit" value="Je m'inscris">
</form>
</div>

<?= $this->endSection() ?>