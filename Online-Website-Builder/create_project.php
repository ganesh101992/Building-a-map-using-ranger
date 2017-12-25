<?php

session_start();

try
{
    $editor_text_data=$_POST['editor_data'];
    
    $myfile = fopen("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].".json", "w+");
    fwrite($myfile, $editor_text_data);
    fclose($myfile);
}
catch(PDOException $e)
{
    echo $e;                               //-------- Connection error
}


?>