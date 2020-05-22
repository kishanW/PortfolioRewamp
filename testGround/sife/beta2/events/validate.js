/**
 * @author kishan
 */
function validation(){
	var counter=true;
	var error="Errors:\n";
	//alert();
	if(document.prj_form.prj_desc.value.length==0)
	{
		error=error+"The field 'Description' was not filled.\n";
		counter=false;
		document.prj_form.prj_desc.focus();	
	}
	if(document.prj_form.prj_summary.value.length==0)
	{
		error=error+"The field 'Summary' was not filled.\n";
		counter=false;
		document.prj_form.prj_summary.focus();
	}
	if(document.prj_form.prj_owner.value.length==0)
	{
		error=error+"The field 'Owner' was not filled.\n";
		counter=false;
		document.prj_form.prj_owner.focus();		
	}
	if(document.prj_form.prj_name.value.length==0)
	{
		error=error+"The field 'Name' was not filled.\n";
		counter=false;
		document.prj_form.prj_name.focus();
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