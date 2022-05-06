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

// fonction de téléchargement
var downloadURL = function downloadURL(url) {
	var hiddenIFrameID = 'hiddenDownloader', iframe = document.getElementById(hiddenIFrameID);
	if (iframe === null) {
		iframe = document.createElement('iframe');
		iframe.id = hiddenIFrameID; iframe.style.display = 'none'; document.body.appendChild(iframe);
	} iframe.src = url;
};
