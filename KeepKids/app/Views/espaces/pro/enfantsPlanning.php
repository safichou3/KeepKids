<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content');?>

<div class="div-center">
    <?= "Liste d'enfants du :" . date('D M Y', $date) ?>
    <div id="container-pay" class="table_div">

        <table id="payement_table" class="table User-Table flexy">
            <thead>
                <tr>
                    <th>Nom de l'enfant</th>
                    <th>Prenom de l'enfant</th>
                    <th>Date de naissance</th>
                    <th>Allergie(s)</th>
                    <th>Maladie(s)</th>
                    <th>Traitement(s)</th>
                    <th>Régime Alimentaire</th>
                    <th>Accompagnateurs</th>
                    <th>Carnet de Vaccination</th>
                    <th>Certificat Médical</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($liste as $element) {
                    echo " <tr><td><strong>" . $element["nom"] . "</strong></td>
            <td>" . $element["prenom"] . "</td>
            <td>" . $element["date"] . "</td>
            <td>" . $element["allergies"] . "</td>
            <td>" . $element["maladies"] . "</td>
            <td>" . $element["traitement"] . "</td>
            <td>" . $element["description"] . "</td>
            <td>";
                    foreach ($accompagnant as $elements) {
                        if ($elements["id"] == $element["id"]) {
                            echo $elements["nomAccompagnant"] . " " . $elements["prenomAccompagnant"] . "<br>";
                        }
                    }
                    echo "</td>
            <td><a href='" . base_url() . "/upload/carnetVaccin/" . $element["carnetVaccin"] . "' download><i class='fi fi-rs-download'></a></i></td>
            <td><a href='" . base_url() . "/upload/certificat/" . $element["certificat"] . "' download><i class='fi fi-rs-download'></a></i></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<style>
    pre {
        background-color: black;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>