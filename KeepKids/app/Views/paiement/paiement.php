<?= $this->extend('master') ?>


<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('title') ?>
<h2 class="section-title"></h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php

use CodeIgniter\CLI\Console;
use \Stripe\Stripe;
use Stripe\PaymentIntent;

$intent = '';

if(isset($_POST['prix']) && !empty($_POST['prix'])){
    require('../vendor/autoload.php');
    $prix = (float)$_POST['prix'];

    $stripe = new \Stripe\Stripe;

    $stripeApi = $stripe::setApiKey('sk_test_51KrI3pCJMAhAR429j4t8pIrsuZhuAMoJWkWt4mJqA5qQHbQ0DFdmWu7RnppahVqEMj8xYXVS3kBe995Pn6pHnsAI00WnkGbex6');
    $stripePayment = \Stripe\PaymentIntent::create([
        'amount' => $prix*100,
        'currency' => 'eur'
    ]);

    $intent = $stripePayment;

}else{
    header('Location: index_paiement.php');
}
?>

    <form method="post">
        <div id="errors"></div>
        <input type="text" id="cardHolder-name" placeholder="Titulaire de la carte">
        <div id="card-elements"></div>
        <div id="card-errors" role="alert"></div>
        <button id="card-button" type="button" data-secret="<?= $intent['client_secret'] ?>">Procéder au paiement</button>
    </form>
    <script src="<?= base_url(); ?>/js/stripe.js"></script>

    
<?= $this->endSection() ?>

