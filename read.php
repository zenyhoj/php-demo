<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Users</title>
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
<div class="container">

    <div class="row">
        <div class="col-md-6 col-centered">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col" class="text-center">ID</th>
                    <th scope="col" class="text-center">Username</th>
                    <th scope="col" class="text-center">Password</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while($row=mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $password = $row['password'];
                    echo "<tr>";
                    echo "<th scope='row' class='text-center'>$id</th>";
                    echo "<td class='text-center'>$username</td>";
                    echo "<td class='text-center'>$password</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>