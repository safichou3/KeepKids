
 jQuery(document).on('input', '#password_inscription', function () {
        passwordChange();
    })
    const password = document.getElementById('passwordInput');
function passwordChange() {
    passwordVerifChange();
    //Vérification Taille >=8
    if (jQuery('#password_inscription').val().length >= 8) {
        colorValide(jQuery('#passwordErrorSize'));
    } else {
        colorError(jQuery('#passwordErrorSize'));
    }

    //Vérification présence d'une minuscule
    if (hasLowerCase(jQuery('#password_inscription').val()) == true) {
        colorValide(jQuery('#passwordErrorMinuscule'));
    } else {
        colorError(jQuery('#passwordErrorMinuscule'));
    }

    //Vérification présence d'une majuscule
    alert("truc")
    if (hasUpperCase(jQuery('#password_inscription').val())) {
        
        colorValide(jQuery('#passwordErrorMajuscule'));
    } else {
        colorError(jQuery('#passwordErrorMajuscule'));
    }

    //Vérification présence d'un nombre
    if (hasNumber(jQuery('#password_inscription').val())) {
        colorValide(jQuery('#passwordErrorNombre'));
    } else {
        colorError(jQuery('#passwordErrorNombre'));
    }

    //Vérification présence d'un char special
    if (hasSpecial(jQuery('#password_inscription').val())) {
        colorValide(jQuery('#passwordErrorSpecial'));
    } else {
        colorError(jQuery('#passwordErrorSpecial'));
    }
}
