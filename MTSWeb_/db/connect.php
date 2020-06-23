<?php

$servername = "51.195.167.163";
$username = "admin";
$password = "";
$dbname = "mts_accounts";
try {
    	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("Error connecting to localhost");
    }
	
?>