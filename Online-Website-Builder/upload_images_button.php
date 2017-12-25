<?php

session_start();
$dest=$_SESSION["email_id"];

    $pos=$_FILES['button_img']['name'];
    $data=$_FILES['button_img']['tmp_name'];
    
    move_uploaded_file($data,"Projects/".$dest."/".$_SESSION['project_name']."/contents/".$pos);
	echo '0';
		
?>