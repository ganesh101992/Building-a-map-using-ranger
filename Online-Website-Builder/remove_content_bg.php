<?php

session_start();
$json_text_data=$_GET['data'];
$json_data=json_decode($json_text_data,true);

$dest=$_SESSION["email_id"];


//----- Check for unwanted backgrounds
$files=scandir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name']."/backgrounds");
$path='backgrounds';
	
$arr=array_diff($files,$json_data['bg']);
$keys=array_keys($arr);
	
for($i=0;$i<count($keys);$i++)
{
        unlink("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name']."/".$path."/".$arr[$keys[$i]]);
}



//----- Check for unwanted contents
$files=scandir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name']."/contents");
$path='contents';

$arr=array_diff($files,$json_data['content']);
$keys=array_keys($arr);
	
for($i=0;$i<count($keys);$i++)
{
        unlink("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name']."/contents/".$arr[$keys[$i]]);
}


?>