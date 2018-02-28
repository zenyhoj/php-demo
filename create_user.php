<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//    require_once ("oop.php");
//    //creates a new user
//    $username = $_POST['username'];
//    $email = $_POST['email'];
//    $admin = new User($username, $email);
//
//if($_POST['submit']) {
//	echo " UserID: {$admin->GetUserId()} Username: {$admin->GetUserName()} {$admin->GetPreferredEmail()} ";
//
//}
//
//	//review the attributes


//creates new User
require_once ('oop.php'); //require this!
$admin = new User('admin1', 'joe.balingit@gmail.com');
echo "UserID: " . $admin->GetUserId() . "Username: " . $admin->GetUserName();

echo "<br>";

$super_admin = new User('joe', 'joebalingit0515@gmail.com');
echo "UserID: " . $super_admin->GetUserId() . " " . "Username: " . $super_admin->GetUserName() . " " . "Email: " .$super_admin->GetPreferredEmail();

$contributor = new User('edmar', 'edmar@gmail.com', 'edmar@yahoo.com');
echo "UserID: " . $contributor->GetUserId() . "Username: " . $contributor->GetUserName();

echo "<br>";
print_r($admin);
echo "<br>";
print_r($super_admin);

var_dump($admin);
var_dump($super_admin);
var_dump($contributor);






?>
<!--<form action="create_user.php" method="post">-->
<!--<label for="username"></label>-->
<!--<input type="text" id="username" name="username" placeholder="Your Username">-->
<!--<label for="email"></label>-->
<!--<input type="email" id="email" name="email">-->
<!--    <input type="submit" name="submit">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->