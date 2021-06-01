<?php	/*check for valid login details */
include("_config.php");
debug($_REQUEST);
$email=$_POST['email'];	$password=$_POST['password'];
$sql="SELECT COUNT(id) AS matches FROM user
	WHERE email='$email'
	AND password='$password'";
print($sql);

//execute the query
$res=$mysqli->query($sql);
if ($res) {
	//the query didn't fail, YAY!!
	$row = $res->fetch_assoc(); //fetch the result row
	$matches=$row['matches']; //fetch the matches value
	debug($matches);
	if($matches>0) {
		//we have a valid login
		print("<br/>Matches found: $matches");
		//create new query to get the customer record
		$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
		print($sql);
		//execute and get the result from the query
		$user_res=$mysqli->query($sql);
		//get the row from out result set_error_handler
		if ($user_res) {
			$row = $user_res->fetch_assoc(); //fetch the row
			$_SESSION=$row; //save the row to the session so it doesn't get lost
		}else{
			print('user_res thing not working!!');			
		}
		//go to mypage if log in successful
		header("Location:mypage.html");
	}
} else {
	//query error
	print("Error: ". $sql . "<br>" . $mysqli ->error);	

}

?>
