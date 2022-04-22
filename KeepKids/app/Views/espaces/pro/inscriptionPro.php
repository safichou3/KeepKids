<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/users.css" rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<h1>inscription pro</h1>
<div class="body-inscription">
    <form method="POST" action="<?= base_url(); ?>/espaces/pro/inscriptionPro" enctype="multipart/form-data">
        <label>Nom</label><br>
        <input class="input-inscription" type="text" name="nom" placeholder="Nom" required><br>

        <label>Prénom</label><br>
        <input class="input-inscription" type="text" name="prenom" placeholder="Prenom" required><br>

        <label>Nom de l'Entreprise</label><br>
        <input class="input-inscription" type="text" name="nomEntreprise" placeholder="Prenom" required><br>

        <label>Email</label><br>
        <input class="input-inscription" type="email" name="email" placeholder="Email" required><br>

        <label>Téléphone</label><br>
        <input class="input-inscription" type="tel" name="tel" placeholder="Telephone" required><br>

        <label>Adresse</label><br>
        <input class="input-inscription" type="text" name="adresse" placeholder="adresse"><br>

        <label>Siret</label><br>
        <input class="input-inscription" type="number" name="siret" placeholder="siret"><br>

        <label>Pièce d'identité (Carte d'Id / Passeport / Permis de conduire)</label><br>
        <input class="input-inscription" type="text" name="carteId" required><br>

        <label>Extrait de kbis</label><br>
        <input class="input-inscription" type="text" name="kbis" required><br>

        <label>Type d'Etablissement</label><br>
        <input class="input-inscription" type="number" name="idEtablissement" required><br>

        <label>Mot de passe</label><br>
        <input class="input-inscription" type="password" name="password" placeholder="Mot de Passe" required><br>

        <input class="inscription" type="submit" value="Je m'inscris" name="inscriptionPro">
    </form>
</div>
<a href="<?= base_url(); ?>/espaces/pro/connexionPro">J'aimerais me connecter</a>

<?= $this->endSection() ?>
