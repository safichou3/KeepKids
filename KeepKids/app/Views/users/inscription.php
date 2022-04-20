<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Création d'un compte parent
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<form action="" method="POST">
    <label>Prénom</label><br>
    <input type="text" id="prenom" name="username"><br>
    <label>Nom</label><br>
    <input type="text" id="nom" name="username"><br>
    <label>Téléphone</label><br>
    <input type="tel" id="tel" name="phone" required><br>
    <label>Mot de passe</label><br>
    <input type="password" id="password" name="password"><br>
    <label>Email</label><br>
    <input type="email" id="email" required><br>
    <input name="title" type="text" class="form-control" id="adresse" placeholder="adresse"><br>
    <input type="submit" value="inscription">
</form>
<?= $this->endSection() ?>