/**
 * @author kishan
 */
function checkMarked(){
	//alert(document.getElementById("member").value + " " + document.getElementById("officer").value + " " + document.getElementById("alumni").value );
	var eParties = new String();
	var counter=true;
	var errormsg="The follwoing errors were found when trying to send you email, \n\n";
	if(document.getElementById("member").checked==true)
	{
		eParties="M ";
	}
	if(document.getElementById("officer").checked==true)
	{
		eParties=eParties + "O ";
	}
	if(document.getElementById("alumni").checked==true)
	{
		eParties=eParties + "A";
	}
	if(eParties.length==0){
		errormsg=errormsg+"- Please select who do you want to email.\n";
		counter= false;
	}
	if (document.email_form.subject.value.length==0){
		errormsg=errormsg+"- The field 'Subject' must be filled.\n";
		counter= false;
	}
	if (document.email_form.message.value=="Your message goes here."){
		errormsg=errormsg+"- The field 'Message' must be filled.\n";
		counter= false;
	}
	if(counter==false){
		alert(errormsg);
		return false;
	}
	else{
		document.getElementById("parties").value=eParties;
		//alert(document.getElementById("parties").value);
		return true;
	}

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