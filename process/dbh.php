<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "ems";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName,3307);

if(!$conn){
	echo "Databese Connection Failed";
}

?>