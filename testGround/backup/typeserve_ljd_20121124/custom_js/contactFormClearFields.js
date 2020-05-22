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
	var errorMsg = "The following errors were found while trying to submit your message, <BR><BR>";
	
	if (document.contactForm.contactName.value == document.contactForm.contactName.defaultValue) {
		errorMsg =errorMsg +"- The field 'Name' must be filled.<BR>";
		var blnValid = false;
		document.contactForm.contactName.focus();
	}
	if (document.contactForm.email.value == document.contactForm.email.defaultValue) {
		errorMsg =errorMsg +"- The field 'Email' must be filled.<BR>";
		var blnValid = false;
		document.contactForm.email.focus();
	}
	if (document.contactForm.phone.value == document.contactForm.phone.defaultValue) {
		errorMsg =errorMsg +"- The field 'Phone' must be filled.<BR>";
		var blnValid = false;
		document.contactForm.phone.focus();
	}
	if (document.forms["contactForm"]["comments"].value==document.forms["contactForm"]["comments"].defaultValue){
		errorMsg=errorMsg+"- The field 'Message' must be filled.";
		blnValid= false;
		document.forms["contactForm"]["comments"].focus();
	}

	//Final verification.
	if(blnValid==false){
		errorMsg=errorMsg+"\n<BR>Click to hide this message"
		document.getElementById('formSubmitError').innerHTML=errorMsg;
		$("div#formSubmitError").fadeIn(2000, "linear");
		//alert(errorMsg);
		return false;
	}
	else{
		return true;
	}
}
function verifyEmail(){
	var status = false;     
	var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
     if (document.contactForm.email.value.search(emailRegEx) == -1) {
		document.getElementById('formSubmitError').innerHTML="Invalid email address entered";
		$("div#formSubmitError").fadeIn("slow", "linear");
        //alert("Please enter a valid email address.");
     }
     else {
          //alert("Woohoo!  The email address is in the correct format and they are the same.");
          status = true;
     }
     resetNeed("email");
     return status;
}
function ValidPhoneNumber(PhoneNumber){
	
	var PNum = new String(PhoneNumber);
	//	555-555-5555
	//	(555)555-5555
	//	(555) 555-5555
	//	555-5555
	// NOTE: COMBINE THE FOLLOWING FOUR LINES ONTO ONE LINE.

	var regex = /^[0-9]{3,3}\-[0-9]{3,3}\-[0-9]{4,4}$|^\([0-9]{3,3}\) [0-9]{3,3}\-[0-9]{4,4}$|^\([0-9]{3,3}\)[0-9]{3,3}\-[0-9]{4,4}$|^[0-9]{3,3}\-[0-9]{4,4}$/;
	if(regex.test(PNum)){
		//alert(regex.test(PNum));
	}
	else{
		//alert(regex.test(PNum));
		document.getElementById('formSubmitError').innerHTML="Invalid phone number entered";
		$("div#formSubmitError").fadeIn("slow", "linear");
	}
	return regex.test(PNum);

}
function phoneField(placeFrom){
	if (document.getElementsByName(placeFrom)[0].value == "") {
		document.getElementsByName(placeFrom)[0].value = document.getElementsByName(placeFrom)[0].defaultValue;
	}
	else{
		ValidPhoneNumber(document.getElementsByName(placeFrom)[0].value);
	}
}
function hideFormSubmitError(){
	$("div#formSubmitError").fadeOut(2000);
}