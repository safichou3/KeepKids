
// cards

$(document).ready(function () {

	$(".showMore1").click(function () {
		$(".hideContent1").hide();
		$(".showContent1").show();
	});
	$(".hideMore1").click(function () {
		$(".hideContent1").show();
		$(".showContent1").hide();
	});
	// card 2
	$(".showMore2").click(function () {
		$(".hideContent2").hide();
		$(".showContent2").show();
	});
	$(".hideMore2").click(function () {
		$(".hideContent2").show();
		$(".showContent2").hide();
	});
	// card 3
	$(".showMore3").click(function () {
		$(".hideContent3").hide();
		$(".showContent3").show();
	});
	$(".hideMore3").click(function () {
		$(".hideContent3").show();
		$(".showContent3").hide();
	});
	})



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
	} else {
		passwordErrorSize.style.color = "black";	
	}

	//Vérification présence d'une minuscule
	if (password.value.match(/[a-z]/, "g")) {
		passwordErrorMinuscule.style.color = "green";
	} else {
		passwordErrorMinuscule.style.color = "black";
	}

	//Vérification présence d'une majuscule
	if (password.value.match(/[A-Z]/, "g")) {
		passwordErrorMajuscule.style.color = "green";
	} else {
		passwordErrorMajuscule.style.color = "black";
	}

	//Vérification présence d'un nombre
	if (password.value.match(/[0-9]/, "g")) {
		passwordErrorNombre.style.color = "green";
	} else {
		passwordErrorNombre.style.color = "black";
	}

	//Vérification présence d'un char special
	if (password.value.match(/[^a-zA-Z\d]/, "g")) {
		passwordErrorSpecial.style.color = "green";
	} else {
		passwordErrorSpecial.style.color = "black";
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
// -------------------------verif siret
const siretImput = document.getElementById("siretImput");
siretImput.addEventListener("input", verifSiret);
const siretERROR = document.getElementById("siretERROR");
siretERROR.style.visibility = 'hidden';
siretERROR.style.color = 'red';
function verifSiret() {

	if (siretImput.value.length == 14) {
		siretERROR.style.visibility = 'hidden';
	} else {
		siretERROR.style.visibility = 'visible';

	}
}