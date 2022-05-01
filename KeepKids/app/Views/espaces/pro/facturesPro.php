<?= $this->extend('master') ?>

<?= $this->section('css') ?>
<link href="<?= base_url(); ?>/css/espace_pro.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<br><br>

<div id="invoice">
    <h1>Facture N°<input class="input-facture" style="font-size:large;" type="number" value="10" name="numéro facture"></h1>

    <form action="">
        <div id="creche-facture">
            <input class="input-facture" type="text" value="Nom de la creche" name="nom de la creche">
            <input class="input-facture" type="text" value="11 rue du poisson " name="adresse">
            <input class="input-facture" type="text" value="76130 Mont-Saint Aignan" name="codePostal">
            <input class="input-facture" type="number" value="0970509001" name="num creche">

        </div>
        <div id="creche-client">
            <input class="input-facture" type="text" value="Mme./M. nom du client" name="nom du client">
            <input class="input-facture" type="text" value="20parc de la rive 76130 mont saint aignan" name="adresse client">
            <input class="input-facture" type="number" value="0652365233" name="telephone client">
            <br>
            <p>Fait le: <input class="input-facture" type="date" value="" name="date d'emission"></p>
            

        </div>
        <br><br>
        <div>
            <table id="table-facture">
                <tr>
                    <th>Prestation(s)</th>
                    <th>Prix x Quantité</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td><strong>Forfait pour votre enfant Mathis Dupond</strong></td>
                    <td>30 x 10 H</td>
                    <td>300€</td>
                </tr>
                <tr>
                    <td style="background-color: white;"></td>
                    <td style="background-color: white;text-align:right;"><strong>Total</strong></td>
                    <td>300€</td>
                </tr>
                <tr>
                    <td style="background-color: white;"></td>
                    <td style="background-color: white;text-align:right;"><strong>Net à Payer</strong></td>
                    <td>350€</td>
                </tr>
            </table>
        </div>
        <br><br>
        <p>A payer avant le : <input class="input-facture" type="date" name="paiement max">
        </p>
    </form>
</div>
<button id="downloadPdf">telecharger</button>


<script>

</script>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= base_url(); ?>/js/main.js"></script>
<script src="<?= base_url(); ?>/js/factures.js"></script>
<?= $this->endSection() ?>