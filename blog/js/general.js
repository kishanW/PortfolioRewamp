function clearThings(placeFrom){
	//alert("We're here!");
	if (document.getElementById(placeFrom).value == document.getElementById(placeFrom).defaultValue) {
		document.getElementById(placeFrom).value = "";
	}
}
function resetNeed(placeFrom){
	//alert(placeFrom);
	if (document.getElementsByName(placeFrom)[0].value == "") {
		document.getElementsByName(placeFrom)[0].value = document.getElementsByName(placeFrom)[0].defaultValue;
	}
}


