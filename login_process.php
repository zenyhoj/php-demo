<?php
$username = $_POST['username'];
$password = $_POST['password'];
//mysql connection
$conn = mysqli_connect('localhost', 'root', '', 'login_credentials');
//Creating a new user
$query = "INSERT INTO user_accounts (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);
if(!$result) {
	die('Query failed!' . mysqli_error($conn));
} else {
	echo 'successfully added new user';
}
//mysql connection ends here
//echo "<br>";
//
//if ( !empty($username) && !empty($password) ){
//	if($username === $password){
//		echo "hi $username";
//	}
//
//} else {
//	echo "Your username and password did not match, please input it correctly";
//}


