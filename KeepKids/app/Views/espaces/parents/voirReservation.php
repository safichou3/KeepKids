<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<br><br>

<h3>Je reserve pour mon enfant</h3>
<div>
    <form method="POST" action="<?= base_url(); ?>/espaces/parents/reservation/" enctype="multipart/form-data">

        <label>Mon enfant</label><br>
        <select class="input-inscription" name="idEnfant">
            <option value="">Quel est l'enfant que vous souhaitez inscrire ?</option>
        </select>

        <label>J'aimerais garder mon enfant le:</label><br>
        <input class="input-inscription" type="date" name="date" required><br>

        <label>De :</label><br>
        <select class="input-inscription" name="heureFin">
            <option>Choisir un horaire</option>
            <option>06H00</option>
            <option>07H00</option>
            <option>08H00</option>
            <option>09H00</option>
            <option>10H00</option>
            <option>11H00</option>
            <option>12H00</option>
            <option>13H00</option>
            <option>14H00</option>
            <option>15H00</option>
            <option>16H00</option>
            <option>17H00</option>
            <option>18H00</option>
            <option>19H00</option>
        </select>
        <label>à :</label><br>

        <select class="input-inscription" name="heureFin">
            <option>Choisir un horaire</option>
            <option>06H00</option>
            <option>07H00</option>
            <option>08H00</option>
            <option>09H00</option>
            <option>10H00</option>
            <option>11H00</option>
            <option>12H00</option>
            <option>13H00</option>
            <option>14H00</option>
            <option>15H00</option>
            <option>16H00</option>
            <option>17H00</option>
            <option>18H00</option>
            <option>19H00</option>
        </select>

        <input class="inscription access" type="submit" value="Ajouter l'enfant">
    </form>
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/localisation.js"></script>
<?= $this->endSection() ?>