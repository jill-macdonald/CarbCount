<!--Jillian MacDonald-->
<?php
/*
file to insert a new meal into my database
*/

//print r the post contents
print_r($_POST);




/* $sql="INSERT INTO meal
(
name,
item1,
item2,
item3,
item4,
item5
)

VALUES
(
'".$_POST["name"]."',
'".$_POST["item1"]."',
'".$_POST["item2"]."',
'".$_POST["item3"]."',
'".$_POST["item4"]."',
'".$_POST["item5"]."'
)
";
 */

$sql="INSERT INTO meal
(
calories,
carbs,
protein,
fat
)

VALUES
(
'".$_POST["calories"]."',
'".$_POST["carbs"]."',
'".$_POST["protein"]."',
'".$_POST["fat"]."'
)
";

print($sql);

//connect to the database
$mysqli = new mysqli("localhost", "root", "", "carbcount");

if ($mysqli->connect_errno) { //check connection
	print("connect failed: ".$mysqli->connect_error."\n");
	exit();
}

//execute the query
if ($mysqli->query($sql) ==true)
{
	//sucess, do something...
	print("YEY it worked!!");
} 
	else 
{
		print("Error: " .$sql ."<br>" . $mysqli->error);
}
		//go back to the mypage even if we don't have a login
		header("Location:mypage.html");

?>
