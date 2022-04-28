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
            <th>Statut du paiement</th>
            <th>Facture</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>05/03/2033</strong></td>
            <td>20/03/33</td>
            <td>Validé</td>
            <td>100€</td>
            <td><i class="fi fi-rs-bank"></i></td>
            <td><i class='fi fi-rs-download'></i></td>

        </tr>
    </tbody>
</table>
<?= $this->endSection() ?>