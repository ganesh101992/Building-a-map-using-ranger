<?php

session_start();
include('database.php');
$conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pro=explode('_',$_SESSION['temp_project']);

//------ Check if the project name is present
$sql = "Select project_name from shared_project";
$present=false;
foreach($conn->query($sql) as $row) 
{
    if($row[0]==$pro[0]."_".$_SESSION['email_id'])
	{
        $present=true;
		break;
	}
}

if($present==false)
{
    //------- Add the Project_name to Shared project name list
    $sql = "INSERT INTO shared_project (project_name,owner) VALUES ('".$pro[0]."_".$_SESSION['email_id']."','".$_SESSION['email_id']."')";
    $conn->exec($sql);
    
    copy("Projects/".$_SESSION['email_id']."/".$_SESSION['temp_project'].".zip","Projects/".$pro[0]."_".$_SESSION['email_id'].".zip");
    copy("Projects/".$_SESSION['email_id']."/".$_SESSION['temp_project'].".json","Projects/".$pro[0]."_".$_SESSION['email_id'].".json");
}
else
{
    copy("Projects/".$_SESSION['email_id']."/".$_SESSION['temp_project'].".zip","Projects/".$pro[0]."_".$_SESSION['email_id'].".zip");
    copy("Projects/".$_SESSION['email_id']."/".$_SESSION['temp_project'].".json","Projects/".$pro[0]."_".$_SESSION['email_id'].".json");
}
	
?>