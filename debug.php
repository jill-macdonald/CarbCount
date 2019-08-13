<?php
// enable full error reporting
error_reporting(E_ALL);

// debug function
function debug($val){
	print("<pre>");
	print_r($val);
	print("</pre>");
}

// connect to the database
// using mysqli("host name", "user name", "password", "database name")
$mysqli = new mysqli("localhost", "root", "", "carbcount");
if ($mysqli->connect_errno) { // check connection
    print("Connect failed: ".$mysqli->connect_error."\n");	
    exit();
}

?>