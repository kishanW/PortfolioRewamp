/**
 * @author kishan
 */
function filler(){
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", "../MEMBERS_LIST.xml", false);
    xmlhttp.send();
    xmlDoc = xmlhttp.responseXML;
    langNames = new Array();
	var x = xmlDoc.getElementsByTagName("MEMBER");
    for (i = 0; i < x.length; i++) {
		var a = x[i].getElementsByTagName("LNAME")[0].childNodes[0].nodeValue;
		if(i==0){
			document.write("<div id='srnd' style='height: 45px; line-height: 0px;'><h3>");
			document.write("<div class='box' id='name'>");
				document.write( x[i].getElementsByTagName("FNAME")[0].childNodes[0].nodeValue+" ");
				//document.write(x[i].getElementsByTagName("LNAME")[0].childNodes[0].nodeValue);
			document.write("</div>");
		
			document.write("<div class='box' id='date' style='margin-right: 8px'>");
				document.write(x[i].getElementsByTagName("DATE")[0].childNodes[0].nodeValue);
			document.write("</div>");
		
			document.write("<div class='box' id='email'>");
				document.write(x[i].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue);
			document.write("</div>");
		document.write("</h3></div>");
		}
		else if(i!=0&&i%2==0){
			document.write("<div id='srnd' style='background:#c7eefb; margin-top: 0px; color: #095a76'>");
			document.write("<div class='box' id='name'>");
				document.write( x[i].getElementsByTagName("FNAME")[0].childNodes[0].nodeValue+" ");
				document.write(x[i].getElementsByTagName("LNAME")[0].childNodes[0].nodeValue);
			document.write("</div>");
		
			document.write("<div class='box' id='date'>");
				document.write(x[i].getElementsByTagName("DATE")[0].childNodes[0].nodeValue);
			document.write("</div>");
		
			document.write("<div class='box' id='email'>");
				document.write(x[i].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue);
			document.write("</div>");
		document.write("</div>");
		}
        else{
			document.write("<div id='srnd' style='background: #d7f2fc; margin-top: 0px; border: 0px solid #6698cc; color: #095a76'>");
			document.write("<div class='box' id='name'>");
				document.write( x[i].getElementsByTagName("FNAME")[0].childNodes[0].nodeValue+" ");
				document.write(x[i].getElementsByTagName("LNAME")[0].childNodes[0].nodeValue);
			document.write("</div>");
		
			document.write("<div class='box' id='date'>");
				document.write(x[i].getElementsByTagName("DATE")[0].childNodes[0].nodeValue);
			document.write("</div>");
		
			document.write("<div class='box' id='email'>");
				document.write(x[i].getElementsByTagName("EMAIL")[0].childNodes[0].nodeValue);
			document.write("</div>");
		document.write("</div>");
		}
        
		
    }
    document.write("<div style='background: #d7f2fc; width: auto; height: 70px; padding: 5px 0px 5px 5px; border-top: 1px solid #a8e4f8; margin-top: 10px'");
    document.write("<h3 style='color: gray'>The count: " + x.length + "</h3>");
    document.write("<x style='color: gray;'>Last update: Jan-30-2011</x>");
    document.write("</div>");
}