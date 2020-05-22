/**
 * @author Alex Kentoyo
 */
function ChForm(){
	var counter=true;
	var error="Errors:\n";





	if(counter==false)
	{
		alert(error);
		
	}
	return counter;

}//close ChForm

function checkMarked(){
	var counter=true;
	var error="Errors:\n";

	if(document.getElementById("UName").value.length==0)
	{
		error=error+"No username.\n";
		counter=false;
	}
	if(document.getElementById("UName").value.length>0){
		if(document.getElementById("UName").value.length>15)
		{
		error=error+"Username must be less than 15 characters.\n";
		counter=false;
		}
		if(document.getElementById("UName").value.length<5)
		{
		error=error+"username must be at least 6 characters.\n";
		counter=false;
		}
	}//CLOSE UNAME

	if(document.getElementById("Pww").value.length==0)
	{
		error=error+"Please enter a password.\n";
		counter=false;		
	}

	if(document.getElementById("Pww").value.length>0)
	{
		if(document.getElementById("Pww").value.length>15)
		{
		error=error+"Password must be less than 15 characters.\n";
		counter=false;		
		}
		if(document.getElementById("Pww").value.length<5)
		{
		error=error+"Password must be at least 6 characters.\n";
		counter=false;		
		}
		if(document.getElementById("RPww").value.length==0)
		{
		error=error+"Please retype the password.\n";
		counter=false;
		}		
		if(document.getElementById("RPww").value!=document.getElementById("Pww").value)
		{		
		error=error+"Password does not match.\n";
		counter=false;
		}
	}//CLOSE PASSWORD


	if(document.getElementById("Email").value.length==0)
	{
		error=error+"You didn't enter an email address.\n";
		counter=false;
	}
	
	if(document.getElementById("Email").value.length>0)
	{
		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("Email").value)))
		{
		error=error+"Invalid email address.\n";
		counter=false;	
		}
	}//END IF EMAIL


	if(document.getElementById("Age").value.length==0)
	{
		error=error+"Please enter your age.\n";
		counter=false;
	}

	if(document.getElementById("Age").value.length>0)
	{
		if(document.getElementById("Age").value<13)
		{
		error=error+"You have to be at least 13 years old to play the game.\n";
		counter=false;
		}
	}//END AGE


	if(counter==false)
	{
		alert(error);
		
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

function validation(ChForm) {
	var valid=false;
	var errormsg="Errors:\n";
	// place any other field validations that you require here
	// validate myradiobuttons
	myOption = -1;
	for (i=thisform.gender.length-1; i > -1; i--) {
		if (thisform.gender[i].checked) {
			valid=true;
		}
	}
	if(valid==false){
		errormsg=errormsg+"No gender was selected.\n";
	}
	if(document.getElementById("ChName").value.length==0)
	{
		valid=false;
		errormsg=errormsg+ "Enter a character name.\n";
	}
	if ( thisform.CH.selectedIndex == 0 ) {	
		errormsg=errormsg+"Please select your character.\n"; 	
		valid=false;
	}
	if ( thisform.CL.selectedIndex == 0 ) {	
		errormsg=errormsg+"Please select your race.\n"; 	
		valid=false;
	}

	if (valid==false) {
		alert(errormsg);
		return false;
	}
	return valid;
}

function ValidateForm(form){
	ErrorText= "";
	if ( form.age.selectedIndex == 0 ) { alert ( "Please select your Age." ); return false; }
	if (ErrorText= "") { form.submit() }
}

function findRC(thisform){
	var id=document.getElementById("RC").selectedIndex;
	if(id=="1"){
		document.getElementById('infobox1').innerHTML = 'The most scholarly and noble of the races, Humans have always taken the greatest interest in learning about their world, and developing better tools and machines to make life.';
	}
	if(id==2){
		document.getElementById('infobox1').innerHTML = 'An intelligent group of individuals, Elves have always been known for their magical abilities and grant a high priority to the research of the arcane powers. Elves master the mystical energies and the Elven mages are able to cast stronger spells while regenerating their mana faster than the other mages.';
	}
	if(id==0){
		document.getElementById('infobox1').innerHTML = 'Please Select a Race';
	}
	if(id==3){
		document.getElementById('infobox1').innerHTML = 'Dwarves are a friendly but powerful race of individuals, and by far the most technologically advanced race in Utopia. They have always had huge skills in engineering, mining and metallurgy, and with time and experience they have become excellent at building and using their land.';
	}
	if(id==4){
		document.getElementById('infobox1').innerHTML = 'The most evil of the races, the Orcs are cruel, selfish, and arrogant. Lovers of destruction and chaos, they are the most ferocious and efficient warriors on the planet and their ranks are filled with the most powerful unit in the game, the dreadful Ogre.';
	}
	if(id==5){
		document.getElementById('infobox1').innerHTML = 'With no concept of mercy or peace, they consume all in their path - an unstoppable force. The Undead are impossible to kill when not taken by surprise, and benefit greatly from not requiring food to survive.';
	}
}

function findCL(thisform){
	var id=document.getElementById("CL").selectedIndex;
	if(id==1){
		document.getElementById('infobox2').innerHTML = 'The mightiest of mighty, the bravest of the brave, the Warrior is the master of melee combat and heavy armor. ';
	}
	if(id==0){
		document.getElementById('infobox2').innerHTML = 'Please Select a Class';
	}
	if(id==2){
		document.getElementById('infobox2').innerHTML = 'The master of arcane lore and magical aptitude, the Mage calls upon the power of fire, earth, air, and water to obliterate enemies.';
	}
	if(id==3){
		document.getElementById('infobox2').innerHTML = 'The servant of divine spirits, the Priest uses prayer to protect, preserve, and restore the well-being of companions. ';
	}
	if(id==4){
		document.getElementById('infobox2').innerHTML = 'An agile and wily survivor, the Ranger specializes in archery, beast mastery, and attunement to nature. ';
	}
	if(id==5){
		document.getElementById('infobox2').innerHTML = 'A swift, silent master of shadows, daggers and death, the Thief can chain together deadly strikes that target critical areas.';
	}
}