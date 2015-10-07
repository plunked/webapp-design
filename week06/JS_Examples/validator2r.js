// validator2r.js
//   The last part of validator2. Registers the 
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers

      var customerNode = document.getElementById("custName");
      var phoneNode = document.getElementById("phone");
      var emailNode = document.getElementById("email");
      var passwordNode = document.getElementById("pwd");
      customerNode.addEventListener("change", chkName, false);
      phoneNode.addEventListener("change", chkPhone, false);
      emailNode.addEventListener("change", chkEmail, false);
      passwordNode.addEventListener("change", chkPassword, false);

