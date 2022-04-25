
const password = document.getElementById("passwordInput");
const siret = document.getElementById("siretImput");
const passwordErrorSize = document.getElementById("passwordErrorSize");
const passwordErrorSpecial = document.getElementById("passwordErrorSpecial");
const passwordErrorNombre = document.getElementById("passwordErrorNombre");
const passwordErrorMinuscule = document.getElementById(	"passwordErrorMinuscule");
const passwordErrorMajuscule = document.getElementById(	"passwordErrorMajuscule");
const onlyText = document.getElementById("onlyText");
const siretERROR = document.getElementById("siretERROR");
password.addEventListener("input", passwordChange);
function passwordChange() {
	
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
		passwordErrorMinuscule.style.color = "red";
	}

	//Vérification présence d'une majuscule
    if (password.value.match(/[a-z]/, 'g')) {
        passwordErrorMajuscule.style.color = "green";
	} else {
		passwordErrorMajuscule.style.color = "red";
	}

	//Vérification présence d'un nombre
	if (password.value.match(/[0-9]/, 'g')) {
        passwordErrorNombre.style.color = "green";
	} else {
		passwordErrorNombre.style.color = "red";
	}

	//Vérification présence d'un char special
	if (password.value.match(/[^a-zA-Z\d]/, 'g')) {
        passwordErrorSpecial.style.color = "green";
	} else {
		passwordErrorSpecial.style.color = "red";
	}
}
nom.addEventListener("oninput",onlyText)
function onlyText(){
if (nom.value.match(/[0-9]/, 'g')) {
	onlyText.style.color = "red";
} else {
	onlyText.style.color = "green";
}
}
siret.addEventListener("siret", passwordChange);
function SIRET(){
if (siret.value.length =14 ) {
	siretERROR.style.color = "green";
} else {
	siretERROR.style.color = "red";
}
}




// REGEX

function hasEmailValid(str) {
    return (/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(str));
}

function hasLowerCase(str) {
    return (/[a-z]/.test(str));
}

function hasUpperCase(str) {
    return (/[A-Z]/.test(str));
}

function hasNumber(str) {
    return (/[0-9]/.test(str));
}

function hasSpecial(str) {
    return (/[!-/]|[:-@]|[[-`]|[{-~]/.test(str));
}
