<?php

session_start();
$dest=$_SESSION["email_id"];

    $pos=$_FILES['myFile']['name'];
    $data=$_FILES['myFile']['tmp_name'];
    
    move_uploaded_file($data,"Projects/".$dest."/".$_SESSION['project_name']."/backgrounds/".$pos);
	echo '0';
		
?>