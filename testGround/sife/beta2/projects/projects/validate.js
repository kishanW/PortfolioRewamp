/**
 * @author kishan
 */
function validation(){
	var counter=true;
	var error="Errors:\n";
	//alert();
	if(document.getElementsByClassName("boxes prj_name")[0].value.length==0)
	{
		alert();
		error=error+"No name was entered.\n";
		counter=false;
		
	}
	if(document.getElementsByClassName("boxes prj_summary")[0].value.length==0)
	{
		error=error+"Please fill the summary field.\n";
		counter=false;		
	}
	if(document.getElementsByClassName("boxes prj_desc")[0].value.length==0)
	{
		error=error+"Please fill the project description.\n";
		counter=false;
		
	}
	if(document.getElementsByClassName("boxes prj_owner")[0].value.length==0)
	{
		error=error+"Please fill the owner field.\n";
		counter=false;
		
	}


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