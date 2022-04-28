<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<br><br><br>
FACTURES & PAIEMENTS


<table>
    <thead>
        <tr>
            <th>Reçu le:</th>
            <th>Limite de paiement</th>
            <th>Statut</th>
            <th>Montant</th>
            <th>Payer</th>
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