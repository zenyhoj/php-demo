<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="assets/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Create User Form</title>
</head>
<body>


<?php
//Creating a new user
include "dbcon.php";
$query = "SELECT * FROM users ORDER BY id DESC";
$result = mysqli_query($conn, $query);
if(!$result) {
    die('Query failed!' . mysqli_error($conn));
}
?>

<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
    </tr>
    </thead>
    <tbody>
        <?php
        while($row=mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
            echo "<tr>";
       echo "<th scope='row''>$id</th>";
        echo "<td>$username</td>";
        echo "<td>$password</td>";
        echo "</tr>";
   }
        ?>
    </tbody>
</table>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>