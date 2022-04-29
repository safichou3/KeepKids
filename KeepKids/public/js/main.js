// console.log("JS ACTIF");
// Molette géolocalisation (km)

var rangeSlider = function(){
	var slider = $('.range-slider'),
		range = $('.range-slider__range'),
		value = $('.range-slider__value');
	  
	slider.each(function(){
  
	  value.each(function(){
		var value = $(this).prev().attr('value');
		$(this).html(value);
	  });
  
	  range.on('input', function(){
		$(this).next(value).html(this.value);
	  });
	});
  };
  
  rangeSlider();
  
//  fonction invoice (facture)

window.onload = function () {
	document.getElementById("downloadPdf").addEventListener("click", () => {
		const invoice = this.document.getElementById("invoice");
		console.log(invoice);
		console.log(window);
		var opt = {
			margin: 2,
			filename: "facture.pdf",
			image: { type: "jpeg", quality: 0.98 },
			html2canvas: { scale: 7 },
			jsPDF: {
				unit: "mm",
				format: "a4",
				orientation: "portrait"
				
			},
		};
		html2pdf().from(invoice).set(opt).save();
	});
};
//  menu burger

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', () => {
	//Animate Links
	navLinks.classList.toggle("open");
	links.forEach(link => {
		link.classList.toggle("fade");
	});

	//Hamburger Animation
	hamburger.classList.toggle("toggle");
});
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

// verifs

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
		passwordErrorSize.style.color = "black";
	}

	//Vérification présence d'une minuscule
	if (password.value.match(/[a-z]/, "g")) {
		passwordErrorMinuscule.style.color = "green";
		onlyText.style.visibility = 'visible';
	} else {
		passwordErrorMinuscule.style.color = "black";
	}

	//Vérification présence d'une majuscule
	if (password.value.match(/[A-Z]/, "g")) {
		passwordErrorMajuscule.style.color = "green";
		onlyText.style.visibility = 'visible';
	} else {
		passwordErrorMajuscule.style.color = "black";
	}

	//Vérification présence d'un nombre
	if (password.value.match(/[0-9]/, "g")) {
		passwordErrorNombre.style.color = "green";
		onlyText.style.visibility = 'visible';
	} else {
		passwordErrorNombre.style.color = "black";
	}

	//Vérification présence d'un char special
	if (password.value.match(/[^a-zA-Z\d]/, "g")) {
		passwordErrorSpecial.style.color = "green";
		onlyText.style.visibility = 'visible';
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
		siretERROR.style.color = "red";
		
		;
	}	
}
// 		siretERROR.style.visibility = 'visible';

// 	}
// }


// fonction de téléchargement
var downloadURL = function downloadURL(url) {
	var hiddenIFrameID = 'hiddenDownloader', iframe = document.getElementById(hiddenIFrameID);
	if (iframe === null) {
		iframe = document.createElement('iframe');
		iframe.id = hiddenIFrameID; iframe.style.display = 'none'; document.body.appendChild(iframe);
	} iframe.src = url;
};
