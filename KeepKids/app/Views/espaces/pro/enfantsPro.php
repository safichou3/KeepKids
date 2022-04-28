<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h2>Enfants inscris</h2>

<table>
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
 
        <?php foreach ($enfant as $element) {    
            echo " <tr><td><strong>" . $element["nom"] . "</strong></td>
            <td>" . $element["prenom"] . "</td>
            <td>" . $element["date"] . "</td>
            <td>" . $element["allergies"] . "</td>
            <td>" . $element["maladies"] . "</td>
            <td>" . $element["traitement"] . "</td>
            <td>" . $element["description"] . "</td>
            <td title='". $element["nom"] ."'><i class='fi fi-rs-eye' ></i> </td>
            <td><a href='" . base_url() . "/upload/carnetVaccin/" . $element["carnetVaccin"] . "' download><i class='fi fi-rs-download'></a></i></td>
            <td><a href='" . base_url() . "/upload/certificat/" . $element["certificat"] . "' download><i class='fi fi-rs-download'></a></i></td></tr>";
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>