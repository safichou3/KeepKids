<?= $this->extend('master') ?>


<?= $this->section('css') ?>

<?= $this->endSection() ?>

<?= $this->section('title') ?>
<h2 class="section-title"></h2>
<?= $this->endSection() ?>

<?= $this->section('content') ?>





<?php
if (isset($_POST['prix']) && !empty($_POST['prix'])) {
    require_once('vendor/autoload.php');
    $prix = (float)$_POST['prix'];

    \Stripe\Stripe::setApiKey('sk_test_51KrI3pCJMAhAR429j4t8pIrsuZhuAMoJWkWt4mJqA5qQHbQ0DFdmWu7RnppahVqEMj8xYXVS3kBe995Pn6pHnsAI00WnkGbex6');

    $intent = \Stripe\PaymentIntent::create([
        'amount' => $prix * 100,
        'currency' => 'eur'
    ]);
} else {
    header('Location: index_paiement.php');
}

// $token = $_POST['stripeToken'];
// $email = $_POST['email'];
// $name = $_POST['name'];

// var_dump($token);
// var_dump($email);
// var_dump($name);

// $leom = filter_var($email, FILTER_VALIDATE_EMAIL);
// var_dump($leom);
// echo('$leom');
// $mo = !empty($name);
// $to = !empty($token);
// var_dump($mo);
// var_dump($to);
// if(!empty($name) && !empty($token)){
//     echo('vrai');
//     require('stripe.php');

//     $stripe = new stripe('pk_test_51KrI3pCJMAhAR429OcsSj92iGdpP2dDBRRV5qGxICb7KylqK02wwB1ivYfz6LWEzMgzOkjm6hXUGOG28IUa5vxR600PWHsl9eu');
//     $customers = $stripe->api('customers', [
//         'source' => $token,
//         'description' => $name,
//         'email' => $email,
//     ]);
//     echo('customer');
//     echo($customer); 
//     $ch = curl_init();
//     $data = [
//         'source' => $token,
//         'description' => $name,
//         'email' => $email,
//     ];
//     curl_setopt_array($ch, [
//         CURLOPT_URL => "https//api.stripe.com/v1/$endpoint",
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_USERPWD => '',
//         CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
//         CURLOPT_POSTFIELDS => http_build_query($data)
//     ]);
//     echo('curl_setopt_array');
//     $response = json_decode(curl_exec($ch));
//     var_dump($response);
//     $charges = $stripe->api("customers/{$customers->id}", [
//         'amount' => 1000,
//         'currency' => 'eur',
//         'customer' => $customer->id
//     ]);
//     var_dump($charges);

//     die('Bravo votre paiement a bien été enregistré');
// }
?>
<form method="post">
    <div id="errors"></div>
    <input type="text" id="cardHolder-name" placeholder="Titulaire de la carte">
    <div id="card-elements"></div>
    <div id="card-errors" role="alert"></div>
    <button id="card-button" type="button" data-secret="<?= $intent['client_secret'] ?>">Procéder au paiement</button>
</form>



<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://js.stripe.com/v3/"></script>
<script src="stripe.js"></script>
<script src="<?= base_url(); ?>/js/main.js"></script>
<?= $this->endSection() ?>