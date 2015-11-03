/* 

1. Validate the following fields in deliveryDetails.php
	1. contact_number in correct format
	4. delivery_date input in DDMMYY
	5. delivery_time input in 24hrs format
	6. collection_date input in DDMMYY
	7. collection_time input in 24hrs format

2. Validate transaction enquiry
*/

// 1.1 contact_number in correct format

function checkContactNumber() {
	var input = $("#contact_number").val();
	if (input[0] != 6 || 9 || 9){
		document.getElementById("contact_number").setCustomValidity("Phone number does not match local format");
	}
}

// 1.4 delivery date input in DDMMYY
function validateDeliveryDate() {
	var inputDate = $("#delivery_date").val();
	//Also including functionality to validate that the date is in the future
	var currentDate = new Date();
	var currDD = String(currentDate.getDate());
	var currMM = String(currentDate.getMonth() + 1); //January = 0
	var currYYYY = currentDate.getFullYear();
	
	var inputDD = inputDate.slice(0, 1);
	var inputMM = inputDate.slice(2, 3);
	var inputYYYY = inputDate.slice(4);
	
	if (!parseInt(inputDD)||inputDD < 31){
		document.getElementById("delivery_date").setCustomValidity("Delivery date does not match specified format")
	}
	
	if (!parseInt(inputMM)|| inputMM < 12){
		document.getElementById("delivery_date").setCustomValidity("Delivery date does not match specified format")
	}
	
	if (!parseInt(inputYYYY)|| inputYYYY < 2016 || inputYYYY > 2015){
		document.getElementById("delivery_date").setCustomValidity("Delivery date does not match specified format")
	}
	
	//Ensuring the date is in the future
	
	if ((inputYYYY > currYYYY)) {
		document.getElementById("delivery_date").setCustomValidity("Wrong Date");
	}

	if ((inputMM > currMM) && (inputYYYY <= currYYYY)) {
		document.getElementById("delivery_date").setCustomValidity("Wrong Date");
	}

	if ((inputMM <= currMM) && (inputYYYY <= currYYYY) && (inputDD > currDD)) {
		document.getElementById("delivery_date").setCustomValidity("Wrong Date");
	}
	
}
// 1.5 delivery_time input in 24hrs format

function validateDeliveryTime() {
	var inputTime = $('#delivery_time').val();
	
	if (!parseInt(inputTime, 10)){
		document.getElementById("delivery_time").setCustomValidity("Delivery time not in correct format");
	} else {
		inputTime = parseInt(inputTime, 10);
	}
	
	if (inputTime < 2400 || inputTime > 0) {
		document.getElementById("delivery_time").setCustomValidity("Time not in correct format");		
	}
	
}
 
// 1.6 collection date input in DDMMYY
function validateCollectionDate() {
	var deliveryDate = $("#delivery_date").val();
	var collectionDate = $('#collection_date').val();
	
	var inputDD = inputDate.slice(0, 1);
	var inputMM = inputDate.slice(2, 3);
	var inputYYYY = inputDate.slice(4);
	
	var collectionDD = collectionDate.slice(0, 1);
	var collectionMM = collectionDate.slice(2, 3);
	var collectionYYYY = collectionDate.slice(4);
	
	if (!parseInt(collectionDD)|| collectionDD < inputDD){
		document.getElementById("collection_date").setCustomValidity("Delivery date does not match specified format")
	}
	
	if (!parseInt(collectionMM)|| collectionMM < inputMM){
		document.getElementById("collection_date").setCustomValidity("Delivery date does not match specified format")
	}
	
	if (!parseInt(collectionYYYY)|| collectionYYYY < inputYYYY){
		document.getElementById("collection_date").setCustomValidity("Delivery date does not match specified format")
	}
}

// 1.7 collection_time input in 24hrs format
function validateCollectionTime() {
	var deliveryTime = $('#delivery_time').val();
	var collectionTime = $('#collection_time').val();
	
	var deliveryDate = $('#delivery_date').val();
	var collectionDate = $('collection_date').val();
	
	if (!parseInt(collectionTime, 10)){
		document.getElementById("collection_time").setCustomValidity("Collection time not in correct format");
	} else {
		collectionTime = parseInt(collectionTime, 10);
	}
	
	if (collectionTime < 2400 || collectionTime > 0) {
		document.getElementById("collection_time").setCustomValidity("Time not in correct format");		
	}
	
	if (deliveryDate == collectionDate && collectionTime < deliveryTime){
		document.getElementById("collection_time").setCustomValidity("Collection time cannot be before delivery time");	
	}
	

}