<?php

$token = $_POST['stripeToken'];
$email = $_POST['email'];
$name = $_POST['name'];

var_dump($token);
var_dump($email);
var_dump($name);

$leom = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($leom);
echo('$leom');
$mo = !empty($name);
$to = !empty($token);
var_dump($mo);
var_dump($to);
if(!empty($name) && !empty($token)){
    echo('vrai');
    require('stripe.php');

    $stripe = new stripe('pk_test_51KrI3pCJMAhAR429OcsSj92iGdpP2dDBRRV5qGxICb7KylqK02wwB1ivYfz6LWEzMgzOkjm6hXUGOG28IUa5vxR600PWHsl9eu');
    $customers = $stripe->api('customers', [
        'source' => $token,
        'description' => $name,
        'email' => $email,
    ]);
    echo('customer');
    echo($customer); 
    $ch = curl_init();
    $data = [
        'source' => $token,
        'description' => $name,
        'email' => $email,
    ];
    curl_setopt_array($ch, [
        CURLOPT_URL => "https//api.stripe.com/v1/$endpoint",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERPWD => '',
        CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
        CURLOPT_POSTFIELDS => http_build_query($data)
    ]);
    echo('curl_setopt_array');
    $response = json_decode(curl_exec($ch));
    var_dump($response);
    $charges = $stripe->api("customers/{$customers->id}", [
        'amount' => 1000,
        'currency' => 'eur',
        'customer' => $customer->id
    ]);
    var_dump($charges);

    die('Bravo votre paiement a bien été enregistré');
}
