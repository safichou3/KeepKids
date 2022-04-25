<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/accordion.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/accordion.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/ad.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/components/api.min.js"> -->
    <style>
        .main.container {
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <div class="ui main_container">
        <form action="paiement.php" class="ui form" id="paiement_form" method="post">
            <div class="field">
                <input type="text" name="name" required placeholder="Votre nom" value="OKEMBA Lendoly">
            </div>
            <div class="field">
                <input type="email" name="email" required placeholder="Votrenom@email.com" value="merry@gmail.com">
            </div>
            <div class="field">
                <input type="text" placeholder="Votre code de carte bleue" data-stripe="number" value="4242 4242 4242 4242">
            </div>
            <div class="field">
                <input type="text" placeholder="MM" data-stripe="exp-month" value="12">
            </div>
            <div class="field">
                <input type="text" placeholder="YY" data-stripe="exp-year" value="23">
            </div>
            <div class="field">
                <input type="text" placeholder="CVC" data-stripe="cvc" value="123">
            </div>
            <input type="text" name="stripeToken" id="stripeToken">
            <p>
                <button type="submit" class="button">
                    Acheter
                </button>
            </p>
        </form>
    </div>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        Stripe.setPublishableKey('pk_test_51KrI3pCJMAhAR429OcsSj92iGdpP2dDBRRV5qGxICb7KylqK02wwB1ivYfz6LWEzMgzOkjm6hXUGOG28IUa5vxR600PWHsl9eu')
        var $form = $('#paiement_form')
        $form.submit(function(e) {
            e.preventDefault()
            // $form.find('.button').attr('disabled', true)
            console.log($form);
            Stripe.card.createToken($form, function(status, response) {
                debugger; 
                if (response.error) {
                    $form.find('.message').remove();
                    $form.prepend('<div class="ui negativ message"><p>' + response.error.message + '</p></div>')
                } else {
                    var token = response.id
                    console.log('token', token);
                    // $form.append('<input type="hidden" name="stripeToken">').val(token)
                    var $tok = $('#stripeToken').val(token);
                    $form.get(0).submit()
                }
            })
        })
    </script>
</body>

</html>