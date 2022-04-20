<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Création d'un compte parent
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="body-inscription">
<form action="" method="POST">
    <label>Prénom</label><br>
    <input class="input-inscription" type="text" id="prenom" name="username" placeholder="Prénom"><br>
    <label>Nom</label><br>
    <input class="input-inscription" type="text" id="nom" name="username" placeholder="Nom"><br>
    <label>Téléphone</label><br>
    <input class="input-inscription" type="tel" id="tel" name="phone" placeholder="tel" required><br>
    <label>Mot de passe</label> <br>
    <input class="input-inscription" type="password" id="password" name="password" placeholder="mot de passe"><br>
    <label>Email</label><br>
    <input class="input-inscription" type="email" id="email" placeholder="email" required><br>
    <label>adresse</label><br>
    <input class="input-inscription" name="title" type="text" class="form-control" id="adresse" placeholder="adresse"><br>
    <input class="inscription" type="submit" value="Inscription">
</form>
</div>
<?= $this->endSection() ?>