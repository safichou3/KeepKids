<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>



<?= $this->section('content') ?>

<style>
    body {
        background-color: #E4EAFF;
    }
</style>

<div class="body-form body-ins-parents body-parents">
    <div class="ins-space">
        <h2 class="section-title-parents">Inscription parents</h2>

        <div class="form-ins-parents">
            <form class="form-center" method="POST" action="<?= base_url(); ?>/espaces/parents/inscriptionParents" enctype="multipart/form-data">

                <div class="ins-group">
                    <div class="input-label margin-group-right">
                        <label>Nom</label>
                        <input id="nom" class="input-inscription" type="text" name="nom" placeholder="Nom" onkeyup="onlyText();" required>
                        <span id="onlyText">Chiffres interdits</span>
                    </div>
                    <div class="input-label">
                        <label>Prenom</label>
                        <input id="prenom" class="input-inscription" type="text" name="prenom" placeholder="Prenom" required>
                        <span id="onlyTexte">Chiffres interdits</span>
                    </div>
                </div>

                <div class="ins-group">
                    <div class="input-label margin-group-right">
                        <label>Email</label>
                        <input class="input-inscription" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-label">
                        <label>Téléphone</label>
                        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required>
                    </div>
                </div>
                <!-- <div class="ins-group"> -->
                <div class="input-label">
                    <label>Adresse</label>
                    <input class="input-inscription input-full-width" type="text" name="adresse" placeholder="adresse">
                </div>

                <div class="input-label">
                    <label>Mot de passe</label>
                    <input id="passwordInput" class="input-inscription input-full-width" type="password" name="password" placeholder="Mot de Passe" required>
                    <div class="errors">
                        <!-- <div class="errors-line"> -->
                        <span id="passwordErrorMajuscule">1 majuscule</span>
                        <span id="passwordErrorMinuscule">1 minuscule</span>
                        <!-- </div> -->
                        <!-- <div class="errors-line"> -->
                        <span id="passwordErrorNombre">1 chiffre</span>
                        <span id="passwordErrorSpecial">1 caractère special</span>
                        <!-- </div> -->
                        <span id="passwordErrorSize">8 caractères minimum</span>
                    </div>
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="conditions" id="" require>
                    <label for="conditions">J'acceptes les <a class="politique" href="<?= base_url(); ?>/accueil/mentions_legales">conditions d'utilisations</a></label>
                </div>
                <!-- </div> -->
                <div class="ins-group">
                    <div class="input-label">
                        <input onclick="validate()" class="inscription" type="submit" value="Je m'inscris">
                    </div>
                </div>
            </form>
            <div class="ins-group">
                <div class="input-label">
                    <a class="link-co-ins" href="<?= base_url(); ?>/espaces/parents/connexionParents">J'aimerais me connecter</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>