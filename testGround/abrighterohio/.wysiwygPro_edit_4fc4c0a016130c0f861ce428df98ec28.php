<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "MMeu7TpVC6KxwqOclSnUzdMOBwzBFYMYFN1YtsyWL98JZkRkn4KWJ9cGrFvjKLS3KSJ4tUbBFbwryGLwlNkbX55l7Zs0_2t_xoTKgVXdW55sTMvYRez9Q3JUo0iQU6w8F3MqmJAuIvOM4wogCkGo_5OnpYVFKGJPC5chwhieuXfkFE_H6a4KHEyL6rszi_407MA63JC7k9DIK9tMaMQjEqRf2lAHQgKWP46VSDSD2uzgkp6OXyNZfkite9To0fY1") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing prv.htm</title>
<meta http-equiv="Content-Type" content="text/html; charset=ansi_x3.110-1983">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">

<div id="saveform" style="display:none;">
<form METHOD="POST" name=mform action="http://abrighterohio.com:2082/frontend/x3/filemanager/savehtmlfile.html">
    <input type="hidden" name="charset" value="ansi_x3.110-1983">
    <input type="hidden" name="baseurl" value="http://abrighterohio.com/">
    <input type="hidden" name="basedir" value="/home/abright2/public_html/">
    <input type="hidden" name="udir" value="/home/abright2/public_html">
    <input type="hidden" name="ufile" value="prv.htm">
    <input type="hidden" name="dir" value="%2fhome%2fabright2%2fpublic_html">
    <input type="hidden" name="file" value="prv.htm">
    <input type="hidden" name="doubledecode" value="1">
<textarea name=page rows=1 cols=1></textarea></form>
</div>
<div id="abortform" style="display:none;">
<form METHOD="POST" name="abortform" action="http://abrighterohio.com:2082/frontend/x3/filemanager/aborthtmlfile.html">
    <input type="hidden" name="charset" value="ansi_x3.110-1983">
    <input type="hidden" name="baseurl" value="http://abrighterohio.com/">
    <input type="hidden" name="basedir" value="/home/abright2/public_html/">
    <input type="hidden" name="dir" value="%2fhome%2fabright2%2fpublic_html">
        <input type="hidden" name="file" value="prv.htm">
    <input type="hidden" name="udir" value="/home/abright2/public_html">
    <input type="hidden" name="ufile" value="prv.htm">

        </form>
</div>
<script language="javascript">
<!--//

function setHtmlFilters(editor) {
// Design view filter
editor.addHTMLFilter('design', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=ansi_x3.110-1983" />');
});

// Source view filter
editor.addHTMLFilter('source', function (editor, html) {
        return html.replace(/\<meta\s+http\-equiv\="Content\-Type"[^\>]+\>/gi, '<meta http-equiv="Content-Type" content="text/html; charset=ansi_x3.110-1983" />');
});
}

// this function updates the code in the textarea and then closes this window
function do_save() {
    document.mform.page.value = WPro.editors[0].getValue();
	document.mform.submit();
}
function do_abort() {
	document.abortform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/wysiwygPro/wysiwygPro.class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

$editor->registerButton('save', 'Save',
        'do_save();', '##buttonURL##save.gif', 22, 22,
        'savehandler'); 
$editor->addRegisteredButton('save', 'before:print' );
$editor->addJSButtonStateHandler ('savehandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 


$editor->registerButton('cancel', 'Cancel',
        'do_abort();', '##buttonURL##close.gif', 22, 22,
        'cancelhandler'); 
$editor->addRegisteredButton('cancel', 'before:print' );
$editor->addJSButtonStateHandler ('cancelhandler', 'function (EDITOR,srcElement,cid,inTable,inA,range){ 
        return "wproReady"; 
        }'); 
$editor->theme = 'blue'; 
$editor->addJSEditorEvent('load', 'function(editor){editor.fullWindow();setHtmlFilters(editor);}');

$editor->baseURL = "http://abrighterohio.com/";

$editor->loadValueFromFile('/home/abright2/public_html/prv.htm');

$editor->registerSeparator('savecan');

// add a spacer:
$editor->addRegisteredButton('savecan', 'after:cancel');

//$editor->set_charset('iso-8859-1');
$editor->mediaDir = '/home/abright2/public_html/';
$editor->mediaURL = 'http://abrighterohio.com/';
$editor->imageDir = '/home/abright2/public_html/';
$editor->imageURL = 'http://abrighterohio.com/';
$editor->documentDir = '/home/abright2/public_html/';
$editor->documentURL = 'http://abrighterohio.com/';
$editor->emoticonDir = '/home/abright2/public_html/.smileys/';
$editor->emoticonURL = 'http://abrighterohio.com/.smileys/';
$editor->loadPlugin('serverPreview'); 
$editor->plugins['serverPreview']->URL = 'http://abrighterohio.com/.wysiwygPro_preview_4fc4c0a016130c0f861ce428df98ec28.php?randomId=MMeu7TpVC6KxwqOclSnUzdMOBwzBFYMYFN1YtsyWL98JZkRkn4KWJ9cGrFvjKLS3KSJ4tUbBFbwryGLwlNkbX55l7Zs0_2t_xoTKgVXdW55sTMvYRez9Q3JUo0iQU6w8F3MqmJAuIvOM4wogCkGo_5OnpYVFKGJPC5chwhieuXfkFE_H6a4KHEyL6rszi_407MA63JC7k9DIK9tMaMQjEqRf2lAHQgKWP46VSDSD2uzgkp6OXyNZfkite9To0fY1';
// print the editor to the browser:
$editor->htmlCharset = 'ansi_x3.110-1983';
$editor->urlFormat = 'relative';
$editor->display('100%','450');

?>
</div>
<script>

</script>

</body>
</html>
<?php ob_end_flush() ?>
