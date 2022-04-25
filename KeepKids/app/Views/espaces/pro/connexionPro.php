<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<h1>Connexion pro</h1>
<div class="body-inscription">
    <form action="" method="POST" action="<?= base_url(); ?>/espaces/pro/connexionPro" enctype="multipart/form-data">
        <?php if (!empty($validation)) {
            echo $validation->listErrors();
        } ?>

        <label>Email</label><br>
        <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

        <label>Mot de passe</label><br>
        <input class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>

        <input class="inscription ins-pro" type="submit" value="Je me connecte">

    </form>
    <a class="link-co-ins" href="<?= base_url(); ?>/espaces/pro/inscriptionPro">J'aimerais m'inscrire</a>
</div>
<?= $this->endSection() ?>