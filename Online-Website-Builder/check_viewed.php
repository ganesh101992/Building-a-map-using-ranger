<?php

session_start();
include('database.php');
$conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "Select viewed from users_detail where email_id='".$_SESSION['email_id']."'";
$sql=$conn->query($sql);
$sql=$sql->fetch();

if($sql[0]=='0')
{
    $sql = "UPDATE $table_name SET viewed=1 WHERE email_id='".$_SESSION['email_id']."'";
    $conn->exec($sql);
    echo 0;
}
else
    echo 1;

?>