<?php
if (isset($_SESSION['user_id']) && isset($_SESSION['username']) && isset($_SESSION['first_name']) && isset($_SESSION['last_name']) &&
	(isset($_SESSION['height']) && (isset($_SESSION['weight'])


	& 
!empty($_SESSION['user_id'])) {
    header("Location:homepage.php"); // checks if user is logged in, if so, redirect to homepage
} 
else {
	session_start();
}
?>



<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Login Page </title>
	<link rel ="stylesheet" type = "text/css" href = "IS436Login.css"/>
	
</head>

<body>

<div class = "Sign-In">

<?php 
	$db = mysqli_connect("studentdb-maria.gl.umbc.edu","astine2","astine2","astine2");
	if(mysqli_connect_errno()) exit("Error - Could not connect to mySQL");
	
	if(
		(isset($_POST['username']) && !empty ($_POST['username'])) &&
		(isset($_POST['password']) && !empty ($_POST['password']))
	){
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM creat_acc WHERE username = '$username' AND password = '$password'";
		
		$result = mysqli_query($db, $query);
		
		if(mysqli_num_rows($result) ===1)
		{
			$row = mysqli_fetch_assoc($result);
			if($row['username'] === $username && $row['password'] ===$password)
			{ 
				$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['f_name'] = $row['f_name'];
				$_SESSION['l_name'] = $row['l_name'];
				$_SESSION['height'] = $row['height'];
				$_SESSION['weight'] = $row['weight'];
				
				header("Location: homepage.php");
				exit();
			}
		}
	} 		
?>


	
	
	
<p> The username or password field was empty or incorrect, please <a href = "IS436Login.html"> Go Back </a> and try again. </p>
	
	
</div>
</body>
</html>
	
