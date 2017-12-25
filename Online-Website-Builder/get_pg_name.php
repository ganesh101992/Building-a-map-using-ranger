<?php

session_start();
include('database.php');
$conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	$myfile=fopen("Projects/".$_SESSION['email_id']."/project_name.txt",'r');
	if(file_exists("Projects/".$_SESSION['email_id']."/project_name.txt"))
        $text['localfile']=fread($myfile,filesize("Projects/".$_SESSION['email_id']."/project_name.txt"));
	else
	    $text['localfile']='';
	fclose($myfile);
	
    $sql = "Select project_name from shared_project where owner!='".$_SESSION['email_id']."'";
	$text['globalfile']='';
    foreach($conn->query($sql) as $row) 
    {
        $text['globalfile']=$text['globalfile'].$row[0].PHP_EOL;
    }

	$myfile=fopen("Projects/".$_SESSION['email_id']."/download_project.txt",'r');
	if(file_exists("Projects/".$_SESSION['email_id']."/download_project.txt"))
        $text['download']=fread($myfile,filesize("Projects/".$_SESSION['email_id']."/download_project.txt"));
	else
	    $text['download']='';
	fclose($myfile);
	

$text=json_encode($text,true);
echo $text;
	
?>