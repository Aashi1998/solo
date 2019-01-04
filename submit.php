<?php

if(isset($_POST['submit'])) 
{	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"d");

// Check connection
if (!$conn) {
	echo "fail1";
    die("Connection failed: " . mysqli_connect_error());
}
foreach $_POST as key=>value
{
    echo "key:".$key;
    echo "value:".$value
}
}
?>