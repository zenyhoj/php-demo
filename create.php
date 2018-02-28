<?php
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 2/28/18
 * Time: 10:48 AM
 */
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
