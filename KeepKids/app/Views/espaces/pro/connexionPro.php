<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<style>
    body {
        background-color: #FF817B;
    }
</style>


<div class="body-form body-co-pro body-pro">

    <div class="co-pro co-space">

        <img class="img-co-pro img-co" src="<?= base_url(); ?>/img/co-pro-img.svg" alt="">

        <div class="card-co-pro card-co">

            <h2 class="section-title-pro">Connexion pro</h2>

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
    </div>
</div>
<?= $this->endSection() ?>