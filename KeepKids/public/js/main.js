// localisation
var lat,lng;
navigator.geolocation.getCurrentPosition(function(pos){
lat = pos.coords.latitude;
lng = pos.coords.longitude;
});

function distance(lat1, lon1, lat2, lon2, unit) {
	if ((lat1 == lat2) && (lon1 == lon2)) {
		return 0;
	}
	else {
		var radlat1 = Math.PI * lat1/180;
		var radlat2 = Math.PI * lat2/180;
		var theta = lon1-lon2;
		var radtheta = Math.PI * theta/180;
		var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
		if (dist > 1) {
			dist = 1;
		}
		dist = Math.acos(dist);
		dist = dist * 180/Math.PI;
		dist = dist * 60 * 1.1515;
		if (unit=="K") { dist = dist * 1.609344 }
		if (unit=="N") { dist = dist * 0.8684 }
		return dist;
	}
}
function getValue() {
	// alert('Lat:' + lat + 'Lng :' + lng);
	alert(distance(lat,lng,48.864716,2.349014,"K"));
}
function get25km() {
	if (distance(lat,lng,48.864716,2.349014,"K") >= 25){
		alert('distance supp a 25.00')
	}else alert('distance inf a 25.00');
}
function get10km() {
	if (distance(lat,lng,48.864716,2.349014,"K") >= 10){
		alert('distance supp a 10')
	}else alert('distance inf a 10');
}
// molette

var rangeSlider = function () {
	var slider = $('.range-slider'),
		range = $('.range-slider__range'),
		value = $('.range-slider__value');

	slider.each(function () {

		value.each(function () {
			var value = $(this).prev().attr('value');
			$(this).html(value);
		});

		range.on('input', function () {
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

	
	//set responsive mobile input field placeholder text
	if ($(window).width() < 769) {
		$(".searchTerm").attr("placeholder", "Trouver une crèche à proximité");
	}
	else {
		$(".searchTerm").attr("placeholder", "Rechercher des creches à proximité");
	}
	$(window).resize(function () {
		if ($(window).width() < 769) {
			$(".searchTerm").attr("placeholder", "Trouver une crèche à proximité");
		}
		else {
			$(".searchTerm").attr("placeholder", "Rechercher des creches à proximité");
		}
	});
	

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

	$('#payement_table').DataTable();

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

// api adresse gouv
$("#inputRue").keyup(function(event) {
	// Stop la propagation par défaut
		  event.preventDefault();
		  event.stopPropagation();
  
		  let rue = $("#inputRue").val();
		  $.get('https://api-adresse.data.gouv.fr/search/', {
			  q: rue,
			  limit: 15,
			  autocomplete: 1
		  }, function (data, status, xhr) {
			  let liste = "";
			  $.each(data.features, function(i, obj) {
				  console.log(obj.properties);
				  // données phase 1 (obj.properties.label) & phase 2 : name, postcode, city
				  // J'ajoute chaque élément dans une liste
				  liste += '<li><a href="#" name="'+obj.properties.label+'" data-name="'+obj.properties.name+'" data-postcode="'+obj.properties.postcode+'" data-city="'+obj.properties.city+'">'+obj.properties.label+'</a></li>';
			  });
			  $('.adress-feedback ul').html(liste);
  
			  // ToDo: Au clic du lien voulu, on envoie l'info en $_POST
			  $('.adress-feedback ul>li').on("click","a", function(event) {
				  // Stop la propagation par défaut
				  event.preventDefault();
				  event.stopPropagation();
  
				  let adresse = $(this).attr("name");
  
				  $("#inputRue").val($(this).attr("data-name"));
				  $("#inputCodePostal").val($(this).attr("data-postcode"));
				  $("#inputVille").val($(this).attr("data-city"));
  
				  $('.adress-feedback ul').empty();
			  });
  
		  }).error(function () {
			  // alert( "error" );
		  }).always(function () {
			  // alert( "finished" );
		  }, 'json');
	  });