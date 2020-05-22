<?php
if ($_GET['randomId'] != "MMeu7TpVC6KxwqOclSnUzdMOBwzBFYMYFN1YtsyWL98JZkRkn4KWJ9cGrFvjKLS3KSJ4tUbBFbwryGLwlNkbX55l7Zs0_2t_xoTKgVXdW55sTMvYRez9Q3JUo0iQU6w8F3MqmJAuIvOM4wogCkGo_5OnpYVFKGJPC5chwhieuXfkFE_H6a4KHEyL6rszi_407MA63JC7k9DIK9tMaMQjEqRf2lAHQgKWP46VSDSD2uzgkp6OXyNZfkite9To0fY1") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
