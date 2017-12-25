<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$db="login_users";


// Create connection
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE login_users";
if (mysqli_query($conn, $sql)) 
{
    echo "Database created successfully";
} 
else 
{
    echo "Error creating database: " . mysqli_error($conn);
}



// sql to create table
$conn = mysqli_connect($servername, $username, $password, $db);
$sql = "CREATE TABLE Users(name varchar(100),email_id varchar(100) collate latin1_general_cs,password varchar(100))";
if (mysqli_query($conn, $sql)) 
{
    echo "Table MyGuests created successfully";
} 
else 
{
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>