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
		passwordErrorSize.style.color = "red";
	}

	//Vérification présence d'une minuscule
	if (hasLowerCase(jQuery("#password_inscription").val()) == true) {
		colorValide(jQuery("#passwordErrorMinuscule"));
	} else {
		colorError(jQuery("#passwordErrorMinuscule"));
	}

	//Vérification présence d'une majuscule

	if (hasUpperCase(jQuery("#password_inscription").val())) {
		colorValide(jQuery("#passwordErrorMajuscule"));
	} else {
		colorError(jQuery("#passwordErrorMajuscule"));
	}

	//Vérification présence d'un nombre
	if (hasNumber(jQuery("#password_inscription").val())) {
		colorValide(jQuery("#passwordErrorNombre"));
	} else {
		colorError(jQuery("#passwordErrorNombre"));
	}

	//Vérification présence d'un char special
	if (hasSpecial(jQuery("#password_inscription").val())) {
		colorValide(jQuery("#passwordErrorSpecial"));
	} else {
		colorError(jQuery("#passwordErrorSpecial"));
	}
}
