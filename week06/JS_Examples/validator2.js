// validator2.js
//   An example of input validation using the change and submit 
//   events, using the DOM 2 event model
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the name text box

function chkName(event) {

// Get the target node of the event

  var myName = event.currentTarget;

// Test the format of the input name 
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myName.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+ ?[A-Z]\.$/);

  if (pos != 0) {
    alert("The name you entered (" + myName.value + 
          ") is not in the correct form. \n" +
          "The correct form is: " +
          "Last-name, First-name, Middle-initial \n" +
          "First letters are capitalized");
    myName.focus();
    myName.select();
  } 
}

// ********************************************************** //
// The event handler function for the phone number text box

function chkPhone(event) {

// Get the target node of the event

  var myPhone = event.currentTarget;

// Test the format of the input phone number
 
  var pos = myPhone.value.search(/^\d{3}-\d{3}-\d{4}$/);
 
  if (pos != 0) {
    alert("The phone number you entered (" + myPhone.value +
          ") is not in the correct form. \n" +
          "The correct form is: ddd-ddd-dddd \n" +
          "Please go back and fix your phone number");
    myPhone.focus();
    myPhone.select();
  } 
}

function chkEmail(event){
  // Get target

  var myEmail = event.currentTarget;

  //test format

var pos = myEmail.value.search(/^\w+@+\w+\.+\w{2,4}$/);

if (pos != 0) {
    alert("The email you entered (" + myEmail.value +
          ") is not in the correct form. \n" +
           "Please go back and fix your email");
    myEmail.focus();
    myEmail.select();
  }
}

function chkPassword(event){
  var myPassword = event.currentTarget;

  var pos = myPassword.value.search(/^(?=.{8,20}$)(?=[^A-Z]*[A-Z]{2,})(?=[^0-9]*[0-9])(?:([\w\d*?!:;])(?!\1))+$/);
  if (pos != 0) {
    alert("The password you entered (" + myPassword.value +
          ") is not in the correct form. \n" +
           "Please go back and fix your password");
    myEmail.focus();
    myEmail.select();
  }

}
      var customerNode = document.getElementById("custName");
      var phoneNode = document.getElementById("phone");
      var emailNode = document.getElementById("email");
      var passwordNode = document.getElementById("pwd");
      customerNode.addEventListener("change", chkName, false);
      phoneNode.addEventListener("change", chkPhone, false);
      emailNode.addEventListener("change", chkEmail, false);
      passwordNode.addEventListener("change", chkPassword, false);


