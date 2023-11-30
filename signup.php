<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Sign-up</title>
	<link rel="stylesheet" type = "text/css" href "IS436Login.css"/>
	
</head>

<body>

<div class = "Sign-In">

<?php

#connect to database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu","astine2","astine2","astine2");

if(mysqli_connect_errno()) exit("Error - Could not connect to mySQL");

$create_table = "CREATE TABLE IF NOT EXISTS create_acc ( user_id INT (7) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, first_name CHAR(30), last_name CHAR (30), email VARCHAR(50), username VARCHAR(30), password VARCHAR(50), 
re_password VARCHAR(50), age int, height varchar(10), weight int";

$create = mysqli_query($db, $create_table);

if(
(isset($_POST['f_name'])&& !empty($_POST['f_name'])) &&
(isset($_POST['l_name'])&& !empty($_POST['l_name'])) &&
(isset($_POST['email'])&& !empty($_POST['email'])) &&
(isset($_POST['username'])&& !empty($_POST['username'])) &&
(isset($_POST['Password'])&& !empty($_POST['Password'])) &&
(isset($_POST['Repassword'])&& !empty($_POST['Repassword'])) &&
(isset($_POST['age'])&& !empty($_POST['age'])) &&
(isset($_POST['height'])&& !empty($_POST['height'])) &&
(isset($_POST['weight'])&& !empty($_POST['weight'])) 

){
	
	$fname = htmlspecialchars($_POST['f_name']);
	$lname = htmlspecialchars($_POST['l_name']);
	$email = htmlspecialchars($_POST['email']);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['Password']);
	$Repassword = htmlspecialchars($_POST['Repassword']);
	$age = htmlspecialchars($_POST['age']);
	$height = htmlspecialchars($_POST['height']);
	$weight = htmlspecialchars($_POST['weight']);

	$fname = mysqli_real_escape_string($db, $fname);
	$lname = mysqli_real_escape_string($db, $lname);
	$email = mysqli_real_escape_string($db, $email);
	$username = mysqli_real_escape_string($db, $username);
	$password = mysqli_real_escape_string ($db, $password);
	$Repassword = mysqli_real_escape_string($db, $Repassword);
	$age = mysqli_real_escape_string($db, $age);
	$height = mysqli_real_escape_string ($db, $height);
	$weight = mysqli_real_escape_string($db, $weight);

if ($password !== $REpassword){

?>

<p> Passwords do not match, <a href = "IS436SignUP.html"> Go Back </a> and retry!</p>

<?php
}else{
	$constructed_query = "INSERT INTO create_acc (first_name, last_name, email, username, password, re_password)
	VALUES ('$fname', '$lname', '$email', '$username', '$password', '$Repassword')";
	
	$result = mysqli_query($db, $constructed_query);
		if(! $result){
			print("Error");
			$error = mysqli_error($db);
			print "<p>.$error.</p>";
			exit;
			
		}
?>
<p> Thank You! Please click <a href = "IS436Login.html">Here</a> to go to Sign-In </p>
<?php
}
} else {
	?>
	<p> All fields are required to Register, Please <a href = "IS436SignUP.html">Go Back</a> and try again! </p>
	<?php
}

?>

</div>



</body>
</html>
