/**
 * @author wanigask
 */
function filler(){
    document.write("<div class='container' style='height: 220px'>");
	
	document.write("<h3>This is the CMS testing...</h3><hr>");
	document.write("This is where you comment...<br><br>");
	document.write("<div style='width: 280px'>");
	
	document.write("<form action='conf.php' method='post'>");
	document.write("Name <input type='text' name='user' id='user' maxlength='30'><br>");
	document.write("Message/ Comment:<br>");
	document.write("<textarea name='msg' id='msg'></textarea><br><br>");
	document.write("<input type='submit' value='Post' id='sub_but'/>");
	document.write("</form>");
	
	document.write("</div></div>");
	
	
	
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", "comments.xml", false);
    xmlhttp.send();
    xmlDoc = xmlhttp.responseXML;
    langNames = new Array();
    var x = xmlDoc.getElementsByTagName("COMMENT");
    
    for (i = 0; i < x.length; i++) {
        document.write("\n");
		document.write("<div class='pulled_comment'>");
        document.write(x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue);
		document.write("<hr>");
		document.write(x[i].getElementsByTagName("MESSAGE")[0].childNodes[0].nodeValue);
		document.write("\n</div>\n");
    }
		
}
/*
function hideThis(){
    if(document.getElementById("langTitle").style.display=="block"){
		document.getElementById("langTitle").style.display="none";
		document.getElementById("BOX").style.display="none";
	}
	else{
		document.getElementById("langTitle").style.display="block";
		document.getElementById("BOX").style.display="block";
	}
}
function expand(langId){
	document.getElementById("langTitle").style.display="block";
	document.getElementById("BOX").style.display="block";
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.open("GET", "LANGUAGES.xml", false);
    xmlhttp.send();
    xmlDoc = xmlhttp.responseXML;
    var x = xmlDoc.getElementsByTagName("LANGUAGE");
    for (i = 0; i < x.length; i++) {
		saveName = x[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue;
		//alert(saveName);
		if (langId==saveName){
			document.getElementById("langTitle").innerHTML = "<h3>A longer description of the " + x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue + "</h3><hr>";
			document.getElementById("BOX").innerHTML = x[i].getElementsByTagName("LONG_DESC")[0].childNodes[0].nodeValue + "<hr> <h3>Click this box to hide this.</h3>";
		}		
       
    }
}
function expandHighlight (){
	var MHheight = document.getElementById("main_highlight").style.height;
	//alert(MHheight);
	if ( MHheight== ''){
		document.getElementById("main_highlight").style.height = "auto";
	}
	if(MHheight=="30px"){
		document.getElementById("main_highlight").style.height = "auto";
	}
	if(MHheight=="auto"){
		document.getElementById("main_highlight").style.height = "30px";
	}
}
*/