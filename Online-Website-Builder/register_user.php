<?php

session_start();

include('database.php');

//$json_data=$_POST["json_data"];
//$json_data=$_REQUEST["json_data"];
$json_data=$_GET["json_data"];                  //get the data in json string
$json_data=json_decode($json_data,true);
$name=$json_data['name'];
$email_id=$json_data['email_id'];
$user_password=$json_data['password'];


try 
{
    $conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="Select count(*) from $table_name where email_id ='".$email_id."'";
	$sql=$conn->query($sql);
	
	if($sql->fetchColumn()==0)
	{
        $sql = "INSERT INTO $table_name (name,email_id,password,viewed) VALUES ('".$name."', '".$email_id."', '".$user_password."',0)";
        $conn->exec($sql);
		$_SESSION["email_id"]=$email_id;
		$_SESSION["project_name"]='';
	
		// creating the USER directories
		mkdir("Projects/".$_SESSION["email_id"]);
	
	
        echo "0";                               //------- Registration successful
	}
	else
	{
	    echo "1";                               //------- Email_id present
	}
}
catch(PDOException $e)
{
    echo "2";                                   //------- Connection error
}

$conn = null;

?>