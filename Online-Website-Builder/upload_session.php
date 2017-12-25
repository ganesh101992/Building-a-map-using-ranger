<?php

session_start();
$_SESSION["folder"]=$_GET['folder'];
$_SESSION['upload_name']=$_GET['name'];

echo $_GET['name'];

?>