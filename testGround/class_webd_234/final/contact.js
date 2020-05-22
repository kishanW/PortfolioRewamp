/**
 * @author wanigask
 */
function checkFields(){
    var blnValid = true;
    var countError = 0;
    var name = document.getElementById("name");
    var email = document.getElementById("email");
	var message = document.getElementById("message");
	
	/*-------------Validating the name-----------------------------------------------------------*/
    if (name.value.length == 0) {
        alert("Jeez! \nWhat's your name?");
        name.focus();
        blnValid = false;
        countError++;
    }
	/*-------------Validating the email----------------------------------------------------------*/
    if (countError == 0) {
        if (email.value.length == 0) {
            alert("How am I suppose to get back to you?");
            email.focus();
            blnValid = false;
			countError++;
        }
		
		//alert(email.value.indexOf("@"));
		if (countError == 0 && email.value.indexOf("@")== -1){
			alert("You have entered an invalid email address. \nPlease re-enter to continue.");
			email.focus();
			blnValid = false;
			countError++;
		}
    }
	/*-------------Validating the message--------------------------------------------------------*/
	if (countError == 0) {
        if (message.value.length == 0) {
            alert("No message for me?");
            message.focus();
            blnValid = false;
			
        }
    }	
	
    if (blnValid) {
        document.getElementById("button").type= "Submit";
    }
}
