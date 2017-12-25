<?php

session_start();

$read=$_GET['data'];

header('Content-Description: File Transfer');
header('Content-Type: application/zip'); 
header('Content-Disposition : attachment;filename='.$read.'.zip');
header('Content-Length: '.filesize("Projects/".$_SESSION['email_id']."/".$read.".zip;"));
header('Content-Transfer-Encoding: binary');  
flush();
readfile("Projects/".$_SESSION['email_id']."/".$read.".zip");
exit();

?>