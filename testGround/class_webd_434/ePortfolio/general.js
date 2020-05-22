/**
 * @author 	Kishan Wanigasinghe
 * website 	www.atox-d.com
 * Date		Apr-12-2010
 */
function checkFields(){
	var blnValid = true;
	var errorMsg = "<div style='background: #ed4f37; padding: 5px; color: #fef4f2'>The following errors were found while trying to submit your message, <br/><br/>";
	var errorColor="#ed4f37"; //Color for the errored out input messages.
	var errorBorder="1px solid #ea3418"; //Color for the errored out input messages.
	
	if (document.contactForm.message.value==document.contactForm.message.defaultValue){
		errorMsg=errorMsg+"- The field 'Message' must be filled.<br/>";
		blnValid= false;
		document.contactForm.message.focus();
		document.contactForm.message.style.background=errorColor;
		document.contactForm.message.style.border=errorBorder;
	}
	if (document.contactForm.email.value == document.contactForm.email.defaultValue) {
		errorMsg =errorMsg +"- The field 'Email' must be filled.<br/>";
		var blnValid = false;
		document.contactForm.email.focus();
		document.contactForm.email.style.background=errorColor;
		document.contactForm.email.style.border=errorBorder;
	}
	if (document.contactForm.name.value == document.contactForm.name.defaultValue) {
		errorMsg =errorMsg +"- The field 'Name' must be filled.<br/><br/>";
		var blnValid = false;
		document.contactForm.name.focus();
		document.contactForm.name.style.background=errorColor;
		document.contactForm.name.style.border=errorBorder;
	}
	
	//Final verification.
	if(blnValid==false){
		document.getElementById('mapEmb').innerHTML = errorMsg+"Any field with red background must be filled or revised.</div><hr><div id=\'openMap\' onClick=\'openMap()\'></div>";
		//alert(errorMsg);
		//document.getElementById('mapEmb').style.background='#ed4f37';
		document.getElementById('mapEmb').style.border='1px solid #d1dae0';
		document.getElementById('mapEmb').style.color='#fef4f2';
		document.getElementById('mapEmb').className="errors";	
		document.getElementById('submitOk').value="no";
		return false;
	}
	else{
		document.getElementById('submitOk').value="ok";
		return true;
	}
}
function test()
{
	alert("Hello World!");
}

function clearThings(placeFrom){
	//alert("We're here!");
	if (document.getElementsByName(placeFrom)[0].value == document.getElementsByName(placeFrom)[0].defaultValue) {
		document.getElementsByName(placeFrom)[0].value = "";
	}
}
function resetNeed(placeFrom){
	//alert(placeFrom);
	if (document.getElementsByName(placeFrom)[0].value == "") {
		document.getElementsByName(placeFrom)[0].value = document.getElementsByName(placeFrom)[0].defaultValue;
	}
}
function cmntheadplus(test){
				//alert("my id is"+test);
				$("#"+test+">#cmntBody").show("blind", { direction: "vertical" }, 200);
				$("#"+test+">#cmntMore").effect("bounce", { times:3 }, 300);
				
}
function bounceThis(test){
				//alert("my id is"+test);
				$("#"+test).effect("shake", { times:3 }, 300);
}
function hideForm(){
	var test=document.getElementById("hideForm").innerHTML;
	//alert(test);
	if (test == "Show Comments")
	{
		document.guestBookForm.style.display = "none";
		document.getElementById("content").style.display = "block";
		document.getElementById("hideForm").innerHTML = "Show Form";
	}
	else
	{
		document.guestBookForm.style.display = "block";
		document.getElementById("content").style.display = "none";
		document.getElementById("hideForm").innerHTML = "Show Comments";
	}
}
function openMap(){
	//document.getElementById('mapEmb').idName=
	document.getElementById('mapEmb').innerHTML = "<h3 style='color: #405361'>Directions?</h3><iframe width='350' height='200' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=franklin+university&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,86.572266&amp;ie=UTF8&amp;hq=franklin+university&amp;t=m&amp;cid=16925378908069699585&amp;hnear=&amp;ll=39.958504,-82.991152&amp;spn=0.026316,0.034246&amp;z=14&amp;iwloc=A&amp;output=embed'></iframe><br /><small><a href='http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=franklin+university&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=35.768112,86.572266&amp;ie=UTF8&amp;hq=franklin+university&amp;t=m&amp;cid=16925378908069699585&amp;hnear=&amp;ll=39.958504,-82.991152&amp;spn=0.026316,0.034246&amp;z=14&amp;iwloc=A' style='color:#6e6e6e;text-align:left'>View Larger Map</a></small>";
}
function hideBlock(blockId)
{
	document.getElementById(blockId).style.display="none";
	document.getElementById('status').innerHTML="sdfs";
}