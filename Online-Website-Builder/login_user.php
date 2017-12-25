<?php

session_start();

include('database.php');

$json_data=$_GET["json_data"];                  //get the data in json string
$json_data=json_decode($json_data,true);
$email_id=$json_data['email_id'];
$user_password=$json_data['password'];

try 
{
    $conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
    $sql_user_pswd = "Select password from $table_name where email_id = '".$email_id."'";
	$sql=$conn->query($sql_user_pswd);
	
	if($sql->rowCount()>0)
	{
	    if($sql->fetchColumn()==$user_password)
	    {
			$_SESSION["email_id"]=$email_id;
			$_SESSION["project_name"]='';
            echo "0";                       //-------- User authentication successful
	    }
	    else
	    {
	        echo "1";                       //-------- Invalid/Wrong password
	    }
	}
	else
	{
	    echo "2";                           //-------- User not Registered OR wrong email_id
	}
}
catch(PDOException $e)
{
    echo "3";                               //-------- Connection error
}

$conn = null;

?>