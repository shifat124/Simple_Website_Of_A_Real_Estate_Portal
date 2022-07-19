<?php
// first of all, we need to connect to the database
require_once('dbconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['password_1']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['country'])){
	// write the query to check if this username and password exists in our database
	$f = $_POST['fullname'];
	$u = $_POST['username'];
        $p = $_POST['password_1'];
        $e = $_POST['email'];
        $a = $_POST['address'];
        $c = $_POST['country'];

	$sql = "SELECT * FROM registration  WHERE fullname = '$f' AND username = '$u'  AND  password = '$p' AND email = '$e' AND address = '$a' AND country = '$c'  ";
        
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if it returns an empty set
	if(mysqli_num_rows($result) !=0 ){
	
		//echo "LET HIM ENTER";
		header("Location: home.php");
	}
	else{
		//echo "Username or Password is wrong";
		header("Location: registar.php");
	}
	
}


?>
