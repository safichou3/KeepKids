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
});
