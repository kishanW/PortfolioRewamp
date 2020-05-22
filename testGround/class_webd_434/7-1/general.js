/**
 * @author 	Kishan Wanigasinghe
 * website 	www.atox-d.com
 * Date		Apr-12-2010
 */
function checkFields(){
	var blnValid = true;
	var errorMsg = "The following errors were found while trying to submit your message, \n\n";
	var errorColor="#c80c06"; //Color for the errored out input messages.
	
	if (document.guestBookForm.message.value==document.guestBookForm.message.defaultValue){
		errorMsg=errorMsg+"- The field 'Message' must be filled.\n";
		blnValid= false;
		document.guestBookForm.message.focus();
		document.guestBookForm.message.style.background=errorColor;
	}	
	if (document.guestBookForm.subject.value == document.guestBookForm.subject.defaultValue) {
		errorMsg =errorMsg +"- The field 'Subject' must be filled.\n";
		var blnValid = false;
		document.guestBookForm.subject.focus();
		document.guestBookForm.subject.style.background=errorColor;
	}
	if (document.guestBookForm.email.value == document.guestBookForm.email.defaultValue) {
		errorMsg =errorMsg +"- The field 'Email' must be filled.\n";
		var blnValid = false;
		document.guestBookForm.email.focus();
		document.guestBookForm.email.style.background=errorColor;
	}
	if (document.guestBookForm.name.value == document.guestBookForm.name.defaultValue) {
		errorMsg =errorMsg +"- The field 'Name' must be filled.\n\n";
		var blnValid = false;
		document.guestBookForm.name.focus();
		document.guestBookForm.name.style.background=errorColor;
	}
	
	//Final verification.
	if(blnValid==false){
		alert(errorMsg);
		document.getElementById('errors').style.visibility='visible';
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
