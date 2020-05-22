/**
 * @author Atox-D
 */
/*------------------------Checking The User Age-----------------------------*/
function checkAge()
{
	var blnValid = true;
	var userAge = document.getElementById("userAge");
	if (userAge.value.length == 0 && checkSoulMateAge())
	{
		alert("Hey! \nWill you type your age?");
		userAge.focus();
		blnValid = false;
	}
	
	return blnValid;
}

/*------------------------Checking The User First Name[fname]-----------------------------*/
function checkFname()
{
	var blnValid = true;
	var fname = document.getElementById("fname");
	if (fname.value.length == 0)
	{
		alert("Hey! \nWill you type your first name?");
		fname.focus();
		blnValid = false;
	}
	return blnValid;
}

/*------------------------Checking The User Last Name[lname]-----------------------------*/
function checkLname()
{
	var blnValid = true;
	var lname = document.getElementById("lname");
	if (lname.value.length == 0)
	{
		alert("Hey! \nWill you type your last name?");
		lname.focus();
		blnValid = false;
	}
	return blnValid;
}
/*------------------------Checking The Soulmate Age-----------------------------*/
function checkSoulMateAge()
{
	var blnValid = false;
	var agerange = document.forms[0].agerange;
	for (var x = 0; x < agerange.length; x++)
	{
		if (agerange[x].checked)
			{
					blnValid = true;
			}
	}
	if (blnValid == false)
	{
		alert("Jeez!\nNo range?");
	}
	return blnValid;
}

function calcAgeDiff()
{
	if (checkAge() && checkSoulMateAge())
	{
		var userAge = document.getElementById("userAge").value;
		var agerange = document.forms[0].agerange;
		var idx;		
		for (var x = 0; x < agerange.length; x++)
		{
			if (agerange[x].checked)
			{
					idx = x;
			}
		}
		
		var saAgeValue = agerange[idx].value;
		var ageDiff = userAge - saAgeValue;
		document.getElementById("ageDiff").value = ageDiff;
		if (ageDiff > 10)
		{
			alert("Amigo...!\nYou are too old for this category!");
		}
	}	
}
function checkHobbies()
{
	var blnValid = false;
	var arChkBoxes = document.getElementsByTagName("input");
	
	for (var a = 0; a < arChkBoxes.length; a++)
	{
		if (arChkBoxes[a].type == "checkbox")
		{
			if (arChkBoxes[a].checked == true)
			{
				blnValid = true;
				break;
			}
		}
	}
	if (blnValid==false)
	{
		alert("You must select a hobby son!");
	}
	return blnValid;
}
function checkForm()
{
	if (checkFname() && checkLname() && checkAge() && checkHobbies())
	{
		alert("good job!");
	}
	
}
