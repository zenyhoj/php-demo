<?php

include "dbcon.php";

//create

function createUser(){
global $conn;
    $username = mysqli_real_escape_string($conn, $_POST['username']); //prevent mysql injection
    $password = mysqli_real_escape_string($conn, $_POST['password']);
//Creating a new user
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die('Query failed!' . mysqli_error($conn));
    } else {
        echo "<h3>{$username} added successfully</h3>";
    }

}
createUser();

//end of create function

//read

//end of read function

//update

//end update function

//delete

//end of delete function

