<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>



<?= $this->section('content') ?>

<div class="body-form body-ins-parents body-parents">
    <div class="ins-space">
        <div class="card-co">
            <h2 class="section-title-parents">Inscription parents</h2>

            <div class="form-ins-parents">
                <form method="POST" action="<?= base_url(); ?>/espaces/parents/inscriptionParents" enctype="multipart/form-data">
                    <div class="ins-group">
                        <label>Nom</label><br>
                        <input id="nom" class="input-inscription" type="text" name="nom" placeholder="Nom" onkeyup="onlyText();" required><br>
                        <span id="onlyText">Chiffres interdits</span><br>

                        <label>Prenom</label><br>
                        <input id="prenom" class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>
                        <span id="onlyTexte">Chiffres interdits</span><br>
                    </div>

                    <div class="ins-group">
                        <label>Email</label><br>
                        <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

                        <label>Téléphone</label><br>
                        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required><br>
                    </div>
                    <div class="ins-group">
                        <label>Adresse</label><br>
                        <input class="input-inscription" type="text" name="adresse" placeholder="adresse"><br>

                        <label>Mot de passe</label><br>
                        <input id="passwordInput" class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>
                        <div class="errors">
                            <span id="passwordErrorMajuscule">1 majuscule</span>
                            <span id="passwordErrorMinuscule">1 minuscule</span>
                            <span id="passwordErrorNombre">1 chiffre</span><br>
                            <span id="passwordErrorSpecial">1 caractère special</span>
                            <span id="passwordErrorSize">8 caractères minimum</span>
                        </div>
                    </div>
                    <input onclick="validate()" class="inscription" type="submit" value="Je m'inscris">

                </form>
                <a class="link-co-ins" href="<?= base_url(); ?>/espaces/parents/connexionParents">J'aimerais me connecter</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>