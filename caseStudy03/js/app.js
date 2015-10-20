//Checking date validaton

window.onload = function () {
	document.getElementById('applicantStartDate').onchange = validateDate;
}


function validateDate() {
	var currentDate = new Date();
	var currDD = currentDate.getDate();
	var currMM = currentDate.getMonth() + 1; //January = 0
	var currYYYY = currentDate.getFullYear();

	if (currDD < 10) {
		dd = '0' + dd;
	}

	if (currMM < 10) {
		mm = '0' + mm;
	}
	var inputDate = getElementbyId('applicantStartDate').value;
	var inputDD = inputDate.slice(0, 1);
	var inputMM = inputDate.slice(2, 3);
	var inputYYYY = inputDate.slice(4);
	console.log(currYYYY)

	if ((inputYYYY > currYYYY)) {
		document.getElementById("applicantStartDate").setCustomValidity("Wrong Date");
	}

	if ((inputMM > currMM) && (inputYYYY <= currYYYY)) {
		document.getElementById("applicantStartDate").setCustomValidity("Wrong Date");
	}

	if ((inputMM <= currMM) && (inputYYYY <= currYYYY) && (inputDD > currDD)) {
		document.getElementById("applicantStartDate").setCustomValidity("Wrong Date");
	}
	console.log()

}