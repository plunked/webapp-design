//Problem 1 - the start date cannot be before the current date
//Solution - Find out the current date and compare it with the start date

//find out the current date
function getCurrentDate() {
	var currentDate = new Date();
	var currDD = String(currentDate.getDate());
	var currMM = String(currentDate.getMonth() + 1); //January = 0
	var currYYYY = currentDate.getFullYear();

	if (currDD.parseInt() < 10) {
		currDD = '0' + currDD;
	}

	if (currMM.parseInt() < 10) {
		currMM = '0' + currMM;
	}
	
	var combinedDate = currDD + currMM + currYYYY;
	return combinedDate;
}

function compareDates(currentDate, inputDate) {
	//var inputDate = document.getElementbyId('applicantStartDate').value;
	
	//split input date up so it can be compared
	var inputDD = inputDate.slice(0, 1);
	var inputMM = inputDate.slice(2, 3);
	var inputYYYY = inputDate.slice(4);

	var currDD = currentDate.slice(0, 1);
	var currMM = currentDate.slice(2, 3);
	var currYYYY = currentDate.slice(4);
	
	//comparing dates
	if ((inputYYYY > currYYYY)) {
		document.getElementById("applicantStartDate").setCustomValidity("Wrong Date");
	}

	if ((inputMM > currMM) && (inputYYYY <= currYYYY)) {
		document.getElementById("applicantStartDate").setCustomValidity("Wrong Date");
	}

	if ((inputMM <= currMM) && (inputYYYY <= currYYYY) && (inputDD > currDD)) {
		document.getElementById("applicantStartDate").setCustomValidity("Wrong Date");
	}
}

$("#applicantStartDate").focusout(function () {
	compareDates(getCurrentDate(), $(this).val());
});