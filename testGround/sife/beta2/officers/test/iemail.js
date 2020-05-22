/**
 * @author kishan
 */
function checkMarked(){
	//alert(document.getElementById("member").value + " " + document.getElementById("officer").value + " " + document.getElementById("alumni").value );
	var eParties = new String();
	var counter=false;
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
		alert("Please select who do you want to email.")
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
	if (document.getElementById(placeFrom).value == "Your message goes here.") {
		document.getElementById(placeFrom).value = "";
	}
}
