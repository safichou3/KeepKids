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



<body onload="initialize()">
    <div class="body-form body-co-pro body-pro">
        <div class="ins-space">
            <h2 class="section-title-pro">Inscription espace professionnel</h2>

            <div class="form-ins-parents">
                <form method="POST" action="#" enctype="multipart/form-data">
                    <?php
                    if (isset($erreurfile)) {
                        if ($erreurfile == true) {
                            echo "<div>erreur fichier</div>";
                        }
                    }
                    ?>
                    <div class="input-radio">
                        <div class="radio-group1 radio-group">
                            <input type="radio" name="idEtablissement" value="1" checked required class="radio-margin-right">
                            <label class="radio-margin" for="1">Assistante Maternelle</label>
                        </div>
                        <div class="radio-group2 radio-group">
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
                            <input id="siretInput" class="input-inscription" type="number" name="siret" placeholder="siret" required>
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
                                <!-- <form novalidate> -->
                                <div class="form-row">
                                    <div class="ins-group">
                                        <div class="input-label margin-group-right">
                                            <label>Adresse *</label>
                                            <input type="textbox" id="address" class="form-control inputRue input-inscription" name="adresse" placeholder="Adresse">
                                        </div>
                                        <div class="input-label margin-group-right">
                                            <label>Code Postal</label>
                                            <input type="text" class="form-control input-inscription" pattern="^[0-9]{1}[0-9a-bA-B]{1}[0-9]{3}$" id="inputCodePostal" minlength="5" maxlength="5" name="cp" placeholder="Code Postal">
                                        </div>
                                        <div class="input-label">
                                            <label>Ville</label>
                                            <input type="text" class="form-control input-inscription" id="inputVille" name="ville" placeholder="Ville">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 proposition">
                                    <div class="adress-feedback">
                                        <ul class="list-addresses">
                                        </ul>
                                    </div>
                                </div>
                                <details>
                                    <summary class="btn-ins-lat-long">
                                        <!-- <div class="btn-ins-lat-long"> -->
                                        <div class="buttonPurple" onclick="codeAddress()">
                                            C'est bien mon adresse
                                        </div>
                                        <!-- </div> -->
                                    </summary>
                                    <div class="details-modal-content">

                                        <div class="input-label">
                                            <!-- <div class="input-inscription input-full-width"> -->
                                                <label>Taux Horaire</label>
                                                <input class="input-inscription input-full-width" type="number" name="tauxHoraire" placeholder="Taux Horaire" require>
                                            <!-- </div> -->
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
                                                <input type="text" id="inputCache" name="latLng" class="input-inscription lat-long-input">
                                                <input class="inscription" type="submit" value="Je m'inscris" name="inscriptionPro" onclick="validate()">

                                            </div>
                                        </div>
                                    </div>
                                </details>

                            </div>
                        </div>
                    </div>
                </form>
                <!-- </form> -->
            </div>

        </div>


        <!-- <div id="map"></div> -->

        <!-- <div class="ins-group"> -->

        <!-- </div> -->

        <a class="link-co-ins" href="<?= base_url(); ?>/espaces/pro/connexionPro">J'aimerais me connecter</a>
    </div>
    <!-- </div>
    </div>
    </div> -->
</body>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<script src="<?= base_url(); ?>/js/api.js"></script>
<script src="<?= base_url(); ?>/js/verifs.js"></script>
<?= $this->endSection() ?>