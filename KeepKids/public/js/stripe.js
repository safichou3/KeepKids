window.onload = () => {
    let stripe = Stripe('pk_test_51KrI3pCJMAhAR429OcsSj92iGdpP2dDBRRV5qGxICb7KylqK02wwB1ivYfz6LWEzMgzOkjm6hXUGOG28IUa5vxR600PWHsl9eu')
    let elements = stripe.elements()
    let redirect = "index_paiement.php"

    let cardHolderName = document.getElementById("cardHolder-name")
    let cardButton = document.getElementById("card-button")
    let clientSecret = cardButton.dataset.secret;

    let card = elements.create("card")
    card.mount("#card-elements")

    card.addEventListener("change", (event) => {
        let displayErrors = document.getElementById("card-errors")
        if(event.error){
            displayErrors.textContent = event.error.message;
        }else{
            displayErrors.textContent = "";
        }
    })

    cardButton.addEventListener("click", () => {
        stripe.handleCardPayment(
            clientSecret, card, {
                payment_method_data: {
                    billing_details: {name: cardHolderName.value}
                }
            }
        ).then((result) => {
            if(result.error){
                document.getElementById("errors").innerText = result.error.message
            }else{
                document.location.href = redirect
            }
        })
    })
}