<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<div class="body-form body-co-parents body-parents">

    <div class="co-parents co-space">
        <div class="card-co-parents card-co">

            <h2 class="section-title-parents">Connexion parents</h2>
            <form method="POST" action="<?= base_url(); ?>/espaces/parents/connexionParents" enctype="multipart/form-data">
                <?php if (!empty($validation)) {
                    echo $validation->listErrors();
                } ?>

                <label>Email</label><br>
                <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

                <label>Mot de passe</label><br>
                <input class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>

                <input class="inscription ins-parents" type="submit" value="Je me connecte">

            </form>
            <a class="link-co-ins" href="<?= base_url(); ?>/espaces/parents/inscriptionParents">J'aimerais m'inscrire</a>

        </div>
        <img class="img-co-parents img-co" src="<?= base_url(); ?>/img/co-parents-img.svg" alt="">
    </div>
</div>
<?= $this->endSection() ?>