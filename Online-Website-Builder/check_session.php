<?php

session_start();

if($_SESSION["project_name"]=='')
{
    $data['email_id']=$_SESSION['email_id'];
	$data['projectname']=null;
}
else
{
    $data['email_id']=$_SESSION['email_id'];
	$data['projectname']=$_SESSION["project_name"];
	$myfile=fopen("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].".json",'r');
	$txt=fread($myfile,filesize("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].".json"));
	if($txt!=false)
	{
	    $txt=json_decode($txt,true);
	    $data['project']=$txt;
	}
	else
	    $data['project']='No file';
	    	
	fclose($myfile);
}

	$data=json_encode($data,true);
	echo $data;

?>