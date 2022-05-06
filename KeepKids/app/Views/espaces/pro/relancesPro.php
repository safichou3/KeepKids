<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="div-center">
    <div id="container-pay" class="table_div">
        <table id="payement_table" class="table User-Table flexy">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Montant dû</th>
                    <th>Statut du paiement</th>
            <th>Voir la facture client</th>

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
                    <td><a href="<?= base_url(); ?>/">Voir la facture</a></td>
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
