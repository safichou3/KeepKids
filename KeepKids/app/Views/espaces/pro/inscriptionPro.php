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
    <div class="ins-space">
        <h2 class="section-title-pro">Inscription espace professionnel</h2>

        <div class="form-ins-parents">
            <form method="POST" action="<?= base_url(); ?>/espaces/pro/inscriptionPro" enctype="multipart/form-data">

                <div class="input-radio">
                    <div class="radio-group1 radio-group">
                        <input type="radio" name="idEtablissement" value="1" checked required class="radio-margin-right">
                        <label class="radio-margin" for="1">Assistante Maternelle</label>
                    </div>
                    <div class="radiio-group2 radio-group">
                        <input type="radio" name="idEtablissement" value="2" required>
                        <label for="2">Creche</label>
                    </div>
                </div>


                <div class="ins-group">
                    <div class="input-label margin-group-right">
                        <label>Nom *</label>
                        <input id="nom" class="input-inscription" type="text" name="nom" placeholder="Nom" required>
                        <span id="onlyText">Chiffres interdits</span>
                    </div>
                    <div class="input-label">
                        <label>Prénom *</label>
                        <input id="prenom" class="input-inscription" type="text" name="prenom" placeholder="Prenom" required>
                        <span id="onlyTexte">Chiffres interdits</span>
                    </div>
                </div>

                <div class="ins-group">
                    <div class="input-label margin-group-right">
                        <label>Nom de l'Entreprise</label>
                        <input class="input-inscription" type="text" name="nomEntreprise" placeholder="Prenom">
                    </div>

                    <div class="input-label">
                        <label>Numéro de Siret *</label>
                        <input id="siretImput" class="input-inscription" type="number" name="siret" placeholder="siret" required>
                        <span id="siretERROR">14 nombres</span>
                    </div>

                </div>

                <div class="ins-group">
                    <div class="input-label margin-group-right">
                        <label>Email *</label>
                        <input class="input-inscription" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-label">
                        <label>Téléphone *</label>
                        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required>
                    </div>

                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6 adresse">
                            <form novalidate>
                                <div class="form-row">
                                    <div class="ins-group">
                                        <div class="input-label margin-group-right">
                                            <label>Adresse *</label>
                                            <input type="text" class="form-control input-inscription" id="inputRue" name="inputRue" placeholder="Adresse">
                                        </div>
                                        <div class="input-label margin-group-right">
                                            <label>Code Postal</label>
                                            <input type="text" class="form-control input-inscription" pattern="^[0-9]{1}[0-9a-bA-B]{1}[0-9]{3}$" id="inputCodePostal" minlength="5" maxlength="5" placeholder="Code Postal">
                                        </div>
                                        <div class="input-label">
                                            <label>Ville</label>
                                            <input type="text" class="form-control input-inscription" id="inputVille" name="inputVille" placeholder="Ville">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 proposition">
                            <div class="adress-feedback">
                                <div class="ins-group">
                                    <ul class="list-adresses"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="ins-group doc-download">
                    <div class="input-label">
                        <label title="Carte d'Id | Passeport | Permis de conduire">Pièce d'identité <i class="fi fi-rs-interrogation"></i></label>
                        <input class="input-inscription" type="file" name="carteId" required>

                    </div>
                    <div class="input-label">
                        <label>Extrait de kbis *</label>
                        <input class="input-inscription" type="file" name="kbis" required>
                    </div>
                </div>

                <!-- <div class="ins-group"> -->
                <div class="input-label">
                    <label>Mot de passe *</label>
                    <input id="passwordInput" class="input-inscription input-full-width" type="password" name="password" placeholder="Mot de Passe" required>
                    <div class="errors pro-errors">
                        <span id="passwordErrorMajuscule">1 majuscule |</span>
                        <span id="passwordErrorMinuscule">1 minuscule |</span>
                        <span id="passwordErrorNombre">1 chiffre |</span>
                        <span id="passwordErrorSpecial">1 caractère special |</span>
                        <span id="passwordErrorSize">8 caractères minimum</span>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="conditions" id="" require>
                    <label for="conditions">J'acceptes les <a class="politique" href="<?= base_url(); ?>/accueil/mentions_legales">conditions d'utilisations</a></label>
                </div>
                <!--  -->
                * Champs Obligatoires
                <div class="ins-group">
                    <div class="input-label">
                        <input onclick="validate()" class="inscription" type="submit" value="Je m'inscris" name="inscriptionPro">
                    </div>
                </div>

            </form>
            <a class="link-co-ins" href="<?= base_url(); ?>/espaces/pro/connexionPro">J'aimerais me connecter</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>