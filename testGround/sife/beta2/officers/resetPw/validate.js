/**
 * @author kishan
 */
function validation(){
	var counter=true;
	var error="Errors:\n";
	//alert(document.pwRest_form.pwRest_newPw1.value.length);
	


	if(document.pwRest_form.pwRest_newPw1.value.length>0 && document.pwRest_form.pwRest_newPw2.value.length>0 && document.pwRest_form.pwRest_newPw1.value!=document.pwRest_form.pwRest_newPw2.value)
	{
		error=error+"Your password and the retyped password did not match.\n";
		counter=false; 
		document.pwRest_form.pwRest_newPw1.focus();	
	}
	if(document.pwRest_form.pwRest_newPw2.value.length==0)
	{
		error=error+"You must retype the new password.\n";
		counter=false; 
		document.pwRest_form.pwRest_newPw2.focus();	
	}
	if(document.pwRest_form.pwRest_newPw1.value.length==0)
	{
		error=error+"The field 'New Password' was not filled.\n";
		counter=false; 
		document.pwRest_form.pwRest_newPw1.focus();	
	}
	if(document.pwRest_form.pwRest_oldPw.value.length==0)
	{
		error=error+"The field 'Old Password' was not filled.\n";
		counter=false;
		document.pwRest_form.pwRest_oldPw.focus();	
	}
	//Final point of error check & error message generator.
	if(counter==false)
	{
		alert(error);
		return counter;
	}
	return counter;
}
function clearThings(placeFrom){
	//alert(placeFrom);
	if (document.getElementsByName(placeFrom)[0].value == "Your message goes here.") {
		document.getElementsByName(placeFrom)[0].value = "";
	}
}
function resetNeed(placeFrom){
	//alert(placeFrom);
	if (document.getElementsByName(placeFrom)[0].value == "") {
		document.getElementsByName(placeFrom)[0].value = "Your message goes here.";
	}
}