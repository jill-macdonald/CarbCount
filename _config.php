<?php
session_start(); //start my session data
function var_name($var) {
	foreach($GLOBALS as $var_name => $value) {
		if($value === $var) {
			return $var_name;
		}
	}
	return false;
}
// debug function that will display anything you pass to it
function debug($val){
	

	print ("<pre>".var_name($val).":  ");
	print_r($val);
	print("</pre><hr>");
}

// connect to the database
$mysqli = new mysqli("localhost", "root", "", "carbcount");


if ($mysqli ->connect_errno) { //check connection
	print("Connect failed: ".$mysqli->connect_error."\n");
	exit();
	}

?>
