<?php

require('stripe.php');
$stripe = new stripe('pk_test_51KrI3pCJMAhAR429OcsSj92iGdpP2dDBRRV5qGxICb7KylqK02wwB1ivYfz6LWEzMgzOkjm6hXUGOG28IUa5vxR600PWHsl9eu');
$stripe->api('customers/cus_90pnhgR03ma9fc', [
    'plan' => 'premium'
]);