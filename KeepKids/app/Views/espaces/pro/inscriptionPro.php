<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="body-form body-co-pro body-pro">
    <h2 class="section-title-pro">Inscription espace professionnel</h2>
    <form method="POST" action="<?= base_url(); ?>/espaces/pro/inscriptionPro" enctype="multipart/form-data">

        <input type="radio" name="idEtablissement" value="1" checked required>
        <label for="1">Assistante Maternelle</label>

        <input type="radio" name="idEtablissement" value="2" required>
        <label for="2">Creche</label><br>

        <label>Nom *</label><br>
        <input id="nom" class="input-inscription" type="text" name="nom" placeholder="Nom" required><br>
        <span id="onlyText">Chiffres interdits</span><br>

        <label>Prénom *</label><br>
        <input id="prenom" class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>
        <span id="onlyTexte">Chiffres interdits</span><br>

        <label>Nom de l'Entreprise</label><br>
        <input class="input-inscription" type="text" name="nomEntreprise" placeholder="Prenom"><br>

        <label>Email *</label><br>
        <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

        <label>Téléphone *</label><br>
        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required><br>

        <!-- ---------------------------------- -->
        <div class="container">
            <div class="row">
                <div class="col-6 adresse">
                    <form novalidate>
                        <div class="form-row">
                            <label>Adresse *</label>
                            <input type="text" class="form-control" id="inputRue" name="inputRue" placeholder="Adresse">
                            <input type="text" class="form-control" pattern="^[0-9]{1}[0-9a-bA-B]{1}[0-9]{3}$" id="inputCodePostal" minlength="5" maxlength="5" placeholder="Code Postal">
                            <input type="text" class="form-control" id="inputVille" name="inputVille" placeholder="Ville">
                        </div>
                    </form>
                </div>
                <div class="col-6 proposition">
                    <div class="adress-feedback">
                        <ul></ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ------------------------------------------ -->
        <label>Numéro de Siret *</label><br>
        <input id="siretImput" class="input-inscription" type="number" name="siret" placeholder="siret" required><br>
        <span id="siretERROR">14 nombres</span><br>

        <label title="Carte d'Id | Passeport | Permis de conduire">Pièce d'identité <i class="fi fi-rs-interrogation"></i></label><br>
        <input class="input-inscription" type="file" name="carteId" required><br>

        <label>Extrait de kbis *</label><br>
        <input class="input-inscription" type="file" name="kbis" required><br>



        <label>Mot de passe *</label><br>
        <input id="passwordInput" class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>
        <div class="errors">
            <span id="passwordErrorMajuscule">1 majuscule |</span>
            <span id="passwordErrorMinuscule">1 minuscule |</span>
            <span id="passwordErrorNombre">1 chiffre |</span><br>
            <span id="passwordErrorSpecial">1 caractère special |</span>
            <span id="passwordErrorSize">8 caractères minimum</span>
        </div>
        <br>
        * Champs Obligatoires

        <input onclick="validate()" class="inscription" type="submit" value="Je m'inscris" name="inscriptionPro">
    </form>
    <a class="link-co-ins" href="<?= base_url(); ?>/espaces/pro/connexionPro">J'aimerais me connecter</a>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>