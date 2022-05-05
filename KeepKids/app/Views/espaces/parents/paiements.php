<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_parents.css" rel="stylesheet">
<!-- <link href="<?= base_url(); ?>/css/test_table.css" rel="stylesheet"> -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- <br><br><br>
FACTURES & PAIEMENTS -->

<div class="div-center">
    <div id="container-pay" class="table_div">

        <table id="payement_table" class="table User-Table flexy">
            <thead>
                <tr>
                    <th class="border border-left">Reçu le:</th>
                    <th>Limite de paiement</th>
                    <th>Statut</th>
                    <th>Montant</th>
                    <th>Payer</th>
                    <th class="border border-right">Facture</th>
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

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>