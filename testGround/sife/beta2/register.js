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
    var email = document.getElementById("eMail");
	var major = document.getElementById("major");
	
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
        if (eMail.value.length == 0) {
            alert("Your email address is required.");
            eMail.focus();
            blnValid = false;
			countError++;
        }
		
		//alert(eMsail.value.indexOf("@"));
		if (countError == 0 && email.value.indexOf("@")== -1){
			alert("You have entered an invalid email address. \nPlease re-enter to continue.");
			eMail.value="";
			eMail.focus();
			blnValid = false;
			countError++;
		}
    }
	/*-------------Validating the message--------------------------------------------------------*/
	if (countError == 0) {
        if (major.value.length == 0) {
            alert("You have to enter a message before sending.");
            major.focus();
            blnValid = false;
			
        }
    }	
	/*
    if (blnValid) {
        document.getElementById("button").type= "submit";
    } */
}
