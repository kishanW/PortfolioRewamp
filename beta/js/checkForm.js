function clearThings(placeFrom){
	//alert(placeFrom);
	if (document.getElementsByName(placeFrom)[0].value == document.getElementsByName(placeFrom)[0].defaultValue) {
		document.getElementsByName(placeFrom)[0].value = "";
	}
}
function resetNeed(placeFrom){
	//alert(placeFrom);
	if (document.getElementsByName(placeFrom)[0].value == "") {
		document.getElementsByName(placeFrom)[0].value = document.getElementsByName(placeFrom)[0].defaultValue;
	}
}
/* FORM VALIDATION */
function checkFields(){
	
	var blnValid = true;
	//var errorMsgCloseButton = "<img src='custom_images/ic_cancel.png'>";
	var errorMsg = "The following errors were found while trying to submit your message, <BR><BR>";
	
	if (document.getElementsByName('senderName')[0].value == "") {
		errorMsg =errorMsg +"- The field 'Name' must be filled.<BR>";
		blnValid = false;
		document.getElementsByName('senderName')[0].focus();
	}
	if (document.getElementsByName('senderEmail')[0].value == "") {
		errorMsg =errorMsg +"- The field 'Email' must be filled.<BR>";
		blnValid = false;
		document.getElementsByName('senderEmail')[0].focus();
	}
	if (document.getElementsByName('senderEmail')[0].value != "" && !verifyEmail()) {
		errorMsg =errorMsg +"- An invalid email address was entered.<BR>";
		blnValid = false;
		document.getElementsByName('senderEmail')[0].focus();
	}
	if (document.forms["contactForm"]["message"].value == ""){
		errorMsg=errorMsg+"- The field 'Message' must be filled.";
		blnValid= false;
		document.forms["contactForm"]["message"].focus();
	}

	//Final verification.
	if(blnValid==false){
		//alert(blnValid);
		document.getElementById('formSubmitError').style.backgroundColor="#f45";
		document.getElementById('formSubmitError').style.border="thin solid #ff2236";
		document.getElementById('formSubmitError').style.color="#eee";
		document.getElementById('formSubmitError').innerHTML= "<img src='images/icons/ic_cancel.png'>" + errorMsg;
		$("div#formSubmitError").hide();
		$("div#formSubmitError").fadeIn(2000, "linear");
		//alert(errorMsg);
		return false;
	}
	else{
		return true;
	}
}
function emailField(placeFrom){
	if (document.getElementsByName(placeFrom)[0].value == "") {
		document.getElementsByName(placeFrom)[0].value = document.getElementsByName(placeFrom)[0].defaultValue;
	}
	else{
		verifyEmail();
	}
}
function verifyEmail(){
	var status = false;     
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (document.contactForm.senderEmail.value.search(emailRegEx) == -1) {
		document.getElementById('formSubmitError').style.backgroundColor="#4AD9D9";
		document.getElementById('formSubmitError').style.border="thin solid #36B1BF";
		document.getElementById('formSubmitError').style.color="#145980";
		document.getElementById('formSubmitError').innerHTML="<img src='images/icons/ic_cancel.png'>" + "Invalid email address entered.";
		$("div#formSubmitError").hide();
		$("div#formSubmitError").fadeIn("slow", "linear");
        //alert("Please enter a valid email address.");
     }
     else {
          //alert("Woohoo!  The email address is in the correct format and they are the same.");
          status = true;
     }
     return status;
}
function hideFormSubmitError(){
	$("div#formSubmitError").fadeOut(2000);
}