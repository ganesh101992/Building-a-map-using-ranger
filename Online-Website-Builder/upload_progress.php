<?php

session_start();

$text=$_GET['name'];

$key = strtolower(ini_get("session.upload_progress.prefix").$text);
if (!empty($_SESSION[$key]))
{
    $current = $_SESSION[$key]["bytes_processed"];
    $total = $_SESSION[$key]["content_length"];
    echo $current < $total ? ceil($current / $total * 100) : 100;
}
else
   echo $_SESSION[$key];

?>