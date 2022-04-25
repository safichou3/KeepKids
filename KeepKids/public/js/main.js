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
	//Vérification Taille >=8
	if (password.value.length >= 8) {
		passwordErrorSize.style.color = "green";
		onlyText.style.visibility = 'visible';

	} else {
		passwordErrorSize.style.color = "red";
		;
	}

	//Vérification présence d'une minuscule
	if (password.value.match(/[A-Z]/, "g")) {
		passwordErrorMinuscule.style.color = "green";
		onlyText.style.visibility = 'visible';
	} else {
		passwordErrorMinuscule.style.color = "red";
		onlyTexte.style.visibility = 'hidden'
	}

	//Vérification présence d'une majuscule
	if (password.value.match(/[a-z]/, "g")) {
		passwordErrorMajuscule.style.color = "green";
		onlyText.style.visibility = 'visible';
	} else {
		passwordErrorMajuscule.style.color = "red";
		onlyTexte.style.visibility = 'hidden'
	}

	//Vérification présence d'un nombre
	if (password.value.match(/[0-9]/, "g")) {
		passwordErrorNombre.style.color = "green";
		onlyText.style.visibility = 'visible';
	} else {
		passwordErrorNombre.style.color = "red";
		onlyTexte.style.visibility = 'hidden'
	}

	//Vérification présence d'un char special
	if (password.value.match(/[^a-zA-Z\d]/, "g")) {
		passwordErrorSpecial.style.color = "green";
		onlyText.style.visibility = 'visible';
	} else {
		passwordErrorSpecial.style.color = "red";
		onlyTexte.style.visibility = 'hidden'
	}
}
// ---------------------véérif nom

const nom = document.getElementById("nom");
nom.addEventListener("input", verifNom);
const onlyText = document.getElementById("onlyText");
onlyText.style.visibility = 'hidden'
function verifNom() {
	// alert(nom.value);
	if (nom.value.match(/[0-9]/, "g")) {
		onlyText.style.color = "red";
		onlyText.style.visibility = 'visible';
	} else {
		onlyText.style.visibility = 'hidden';
	}
}
// -------------------------verif prénom
const prenom = document.getElementById("prenom");
prenom.addEventListener("input", verifPrenom);
const onlyTexte = document.getElementById("onlyTexte");
onlyTexte.style.visibility = 'hidden'
function verifPrenom() {
	// alert(nom.value);
	if (prenom.value.match(/[0-9]/, "g")) {
		onlyTexte.style.color = "red";
		onlyTexte.style.visibility = 'visible';
	} else {
		onlyTexte.style.visibility = 'hidden'
	}
}
// -------------------------verif prénom
const siretImput = document.getElementById("siretImput");
siretImput.addEventListener("input", verifSiret);
const siretERROR = document.getElementById("siretERROR");
function verifSiret() {
	if (siretImput.value.length = 14) {
		siretERROR.style.color = "green";
	} else {
		siretERROR.style.color = "red";
		
		;
	}	
}
