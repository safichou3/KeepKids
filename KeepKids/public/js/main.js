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



var wk1 = [4, 5, 6, 7, 8, 9, 10];
var wk2 = [11, 12, 13, 14, 15, 16, 17];
var wk3 = [18, 19, 20, 21, 22, 23, 24];
var wk4 = [25, 26, 27, 28, 29, 30, 31];
var weekNum = wk1;
var week = 1;

var d = new Date();
var n = d.getMonth();
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
var curMonth = months[n];

var a = new Date();
var b = a.getDay();
var days = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
var curDay = days[b];
document.getElementById(curDay).style.background = "#ff651a";

var r = new Date();
var t = r.getDate();

document.getElementById('close').addEventListener("click", function() {
	modalBox.style.height = "0%";
	number.style.opacity = "0";
	number.style.left = "70px";
	number.style.transition = "opacity 0.5s, left 3s";
	reminders.style.opacity = "0";
	document.getElementById('close').style.opacity = "0";
	document.getElementById('close').style.visibility = "hidden";
		document.getElementsByClassName("check").style.opacity = "0";	document.getElementsByClassName("uncheck").style.opacity = "0";
document.getElementById('reminders').style.top = "0px";
});

function setup() {
	switch (week) {
		case 1:
			weekNum = wk1;
			break;
		case 2:
			weekNum = wk2;
			break;
		case 3:
			weekNum = wk3;
			break;
		case 4:
			weekNum = wk4;
			break;
	}
	d1.innerHTML = weekNum[0];
	d2.innerHTML = weekNum[1];
	d3.innerHTML = weekNum[2];
	d4.innerHTML = weekNum[3];
	d5.innerHTML = weekNum[4];
	d6.innerHTML = weekNum[5];
	d7.innerHTML = weekNum[6];
	month.innerHTML = curMonth;
	for (i = 0; i < 7; i++) {
		if (weekNum[i] === t) {
			document.getElementById("d" + (i + 1)).className = "testCur";
		} else {
			document.getElementById("d" + (i + 1)).className = "test";
		}
	}
}

var curDay;

function openMod(x) {
	curDay = x;
	modalBox.style.height = "40%";
	number.style.opacity = "1";
	number.style.left = "20px";
	number.style.transition = "opacity 2s, left 3s";
	switch (week) {
		case 1:
			weekNum = wk1;
			break;
		case 2:
			weekNum = wk2;
			break;
		case 3:
			weekNum = wk3;
			break;
	}
	number.innerHTML = weekNum[x];
	reminders.style.opacity = "1";

	document.getElementById('close').style.visibility = "visible";
	document.getElementById('close').style.opacity = "1";
		document.getElementsByClassName("check").style.opacity = "1";	document.getElementsByClassName("uncheck").style.opacity = "1";
document.getElementById('reminders').style.top = "125px";
}

document.getElementById('back').addEventListener("click", function() {
	if (week > 1) {
		week = week - 1;
	}
	setup();
});
document.getElementById('forward').addEventListener("click", function() {
	if (week < 4) {
		week = week + 1;
	}
	setup();
});

setup();


// function on() {
//   document.getElementById("overlay").style.display = "block";
// }

// function off() {
//   document.getElementById("overlay").style.display = "none";
// }