/**
 * @author wanigask
 */
function poster(){
    //alert(document.getElementById("Message").value);
    document.getElementById('post').innerHTML = "";
    var inputOne = (document.getElementById("inNumOne")).value;
    var inputTwo = (document.getElementById("inNumTwo")).value;
	var inputThree = (document.getElementById("inNumThree")).value;
	var inputFour = (document.getElementById("inNumFour")).value;
	converter(inputOne);
    converter(inputTwo);
	converter(inputThree);
	converter(inputFour);
}
function converter(x){
	var input = x;
	var result = 0;
    var remainder = 0;
	var last = "";
    MyNumbers = new Array();
    result = input;
    if (x>255 || x<0)
	{
		alert("Invalid IP address");
		document.getElementById("inNumOne").value = "";
		document.getElementById("inNumOne").focus();
	}
	for (i = 0; i < 8; i++) {
        if (i == 0) {
            if ((input % 2) == 1) {
                result = (input - 1) / 2;
                MyNumbers[i] = 1;            
            }
			else {
                result = (input / 2);
                MyNumbers[i] = 00;
            }
        }
        else{
			if ((result % 2) == 1) {
                result = (result - 1) / 2;
                MyNumbers[i] = 1;
            }
            else {
                result = (result / 2);
                MyNumbers[i] = 0;
            }
		}
    }
    for (k = 0; k < 8; k++) {
        last = last + MyNumbers[7 - k];
    }
    //alert(last);
    document.getElementById('post').innerHTML = document.getElementById('post').innerHTML  + " "+ last;
}
/*result = Math.floor(number/2);
 remainder = (number%2);
 if(i == 0)
 {
 MyNumbers[i] = (number%2);
 }
 else{
 MyNumbers[i] = (result%2);
 }
 last = last + MyNumbers[8-i] +", ";
 */
