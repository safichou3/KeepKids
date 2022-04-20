<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/newsCreation.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('title') ?>
Création d'un compte parent
<?= $this->endSection() ?>

<?= $this->section('content') ?>

    <form action="" method="POST" > 
    <input type="text" id="prenom" name="username">
    <input type="text" id="nom" name="username">
    <input type="tel" id="tel" name="phone" required>
    <input type="password" id="password" name="password">
    <input type="email" id="email" pattern=".+@mail\.com" size="30" required>
    <input name="title" type="text" class="form-control" id="adresse" placeholder="adresse">
    </form>

<?= $this->endSection() ?>