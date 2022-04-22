//  jQuery(document).on('input', '#password_inscription', function () {
//         passwordChange();
//     })
const password = document.getElementById("passwordInput");
const passwordErrorSize = document.getElementById("passwordErrorSize");
const passwordErrorSpecial = document.getElementById("passwordErrorSpecial");
const passwordErrorNombre = document.getElementById("passwordErrorNombre");
const passwordErrorMinuscule = document.getElementById(
	"passwordErrorMinuscule"
);
const passwordErrorMajuscule = document.getElementById(
	"passwordErrorMajuscule"
);
password.addEventListener("input", passwordChange);
function passwordChange() {
	// alert(password.value.length);

	//Vérification Taille >=8
	if (password.value.length >= 8) {
		passwordErrorSize.style.color = "green";
	} else {
		passwordErrorSize.style.color = "red";s
	}

	//Vérification présence d'une minuscule
	if (password.value.match(/[A-Z]/, 'g')) {
        passwordErrorMinuscule.style.color = "green";
	} else {
		passwordErrorMinuscule.style.color = "green";
	}

	//Vérification présence d'une majuscule
    if (password.value.match(/[a-z]/, 'g')) {
        passwordErrorMajuscule.style.color = "green";
	} else {
		passwordErrorMajuscule.style.color = "green";
	}

	//Vérification présence d'un nombre
	if (password.value.match(/[0-9]/, 'g')) {
        passwordErrorNombre.style.color = "green";
	} else {
		passwordErrorNombre.style.color = "green";
	}

	//Vérification présence d'un char special
	if (password.value.match(/[^a-zA-Z\d]/, 'g')) {
        passwordErrorSpecial.style.color = "green";
	} else {
		passwordErrorSpecial.style.color = "green";
	}
}
