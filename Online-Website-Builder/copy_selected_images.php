<?php

session_start();
$text=$_GET['data'];

copy("backgrounds/woyo_b/".$text,"Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name'].'/backgrounds/'.$text);

?>