/**
 * @author 	Kishan Wanigasinghe
 * website 	www.atox-d.com
 * Date		Apr-12-2010
 */
function checkFields(){
	var blnValid = true;
	var errorMsg = "The following errors were found while trying to submit your message, \n\n";
	
	if (document.contactForm.message.value==document.contactForm.message.defaultValue){
		errorMsg=errorMsg+"- The field 'Message' must be filled.\n";
		blnValid= false;
		document.contactForm.message.focus();
	}
	if (document.contactForm.email.value == document.contactForm.email.defaultValue) {
		errorMsg =errorMsg +"- The field 'Email' must be filled.\n";
		var blnValid = false;
		document.contactForm.email.focus();
	}
	if (document.contactForm.name.value == document.contactForm.name.defaultValue) {
		errorMsg =errorMsg +"- The field 'Name' must be filled.\n";
		var blnValid = false;
		document.contactForm.name.focus();
	}	
	
	//Final verification.
	if(blnValid==false){
		alert(errorMsg);
		return false;
	}
	else{
		return true;
	}
}
function test()
{
	alert("Hello World!");
}

function clearThings(placeFrom){
	//alert("We're here!");
	if (document.getElementById(placeFrom).value == document.getElementById(placeFrom).defaultValue) {
		document.getElementById(placeFrom).value = "";
	}
}
function resetNeed(placeFrom){
	//alert(placeFrom);
	if (document.getElementsByName(placeFrom)[0].value == "") {
		document.getElementsByName(placeFrom)[0].value = document.getElementsByName(placeFrom)[0].defaultValue;
	}
}