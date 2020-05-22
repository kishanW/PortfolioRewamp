/**
 * @author 	Kishan Wanigasinghe
 * website 	www.atox-d.com
 * Date		Apr-12-2010
 */
function checkFields(){
    var blnValid = true;
    var countError = 0;
    var fName = document.getElementById("fName");
	var lName = document.getElementById("lName");
    var email = document.getElementById("email");
	var message = document.getElementById("message");
	
	/*-------------Validating the name-----------------------------------------------------------*/
	if (fName.value.length == 0) {
		alert("Error! \nYour First name should be filled.");
		fName.focus();
		blnValid = false;
		countError++;
	}
	if (countError == 0){
		if(lName.value.length == 0){
			alert("Error! \nYour Last name should be filled.");
        		lName.focus();
       		blnValid = false;
        		countError++;
		}
	}
	/*-------------Validating the email----------------------------------------------------------*/
    if (countError == 0) {
        if (email.value.length == 0) {
            alert("Your email address is required.");
            email.focus();
            blnValid = false;
			countError++;
        }
		
		//alert(email.value.indexOf("@"));
		if (countError == 0 && email.value.indexOf("@")== -1){
			alert("You have entered an invalid email address. \nPlease re-enter to continue.");
			email.value="";
			email.focus();
			blnValid = false;
			countError++;
		}
    }
	/*-------------Validating the message--------------------------------------------------------*/
	if (countError == 0) {
        if (message.value.length == 0) {
            alert("You have to enter a message before sending.");
            message.focus();
            blnValid = false;
			
        }
    }	

    if (blnValid) {
        return true;
    } 
    return false;
}
