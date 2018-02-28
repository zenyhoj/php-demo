<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User Form</title>
</head>
<body>


<?php
$username = $_POST['username'];
$password = $_POST['password'];
//Creating a new user
include "dbcon.php";
$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $query);
if(!$result) {
    die('Query failed!' . mysqli_error($conn));
} else {
    echo "<h3>{$username} added successfully</h3>";
}
?>

<form action="create.php" method="post">

    <input type="text" name="username" placeholder="Enter your username here" />
    <input type="password" name="password" placeholder="Your password here" />
    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>