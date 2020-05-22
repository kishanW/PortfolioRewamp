<?php
if ($_GET['randomId'] != "H_yR97EER4_rvXk4T3WQjVoDPbmdxe4HAjKsNYwLULmaTLfTPiPrOkAWllhUtZh_j37Ev_O0FSAombKqSSdS_SmJBklAiMDAlOy1zVZUdFAj9fqV4vDsI8AoyWDtiFNskM3Cbq9RblCEQKlvKIoZN3RgeucvFpvREei4fgeU6PCGT4RshL29ejVNUAIzoWDJMhVQ8uNLIHerBaqNLzNaVWRaKan2bJ2y7tdhbURBNH0Cp5I7UMshmvmGLXFzAaBJ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
