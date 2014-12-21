<?php

$hostname = "127.0.1";
$user = "ryan";
$password = "";
$dbname = "firstdatabase";

// Connect to database
$dbConnected = mysql_connect($hostname, $user, $password, $dbname);
if(!$dbConnected) {
	// Return Failure Message If Connection Failed
	echo "failed: " . mysql_error();
} else {
	// Return Success Message If Connection Succeeded
	echo "Successfully connected to " . $dbname . ".";
}

$sqlq = "DROP TABLE firstdatabase.testtable";
if(!mysql_query($sqlq)) {
	echo "failed: " . mysql_error();
} else {
	echo "successfully dropped table";
}

// Close Connection After Scrip Has Finnished
mysql_close();
?>
