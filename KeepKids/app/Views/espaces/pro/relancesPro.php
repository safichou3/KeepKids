<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<br><br><br> PAIEMENTS ET RELANCES

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Téléphone</th>
            <th>Montant dû</th>
            <th>Statut du paiement</th>
            <th>Facture</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>ousbane</strong></td>
            <td>Houda</td>
            <td>20 parc de l'epte</td>
            <td>0652362544</td>
            <td>100€</td>
            <td><i class="fi fi-rs-bank"></i></td>
            <td><i class='fi fi-rs-download'></i></td>

        </tr>
    </tbody>
</table>
<?= $this->endSection() ?>