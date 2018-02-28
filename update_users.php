<?php include "dbcon.php";

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
if(!$result){
    die("Error querying the database" . mysqli_error()) ;
}
?>

<!--query update-->
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query_update = "UPDATE users SET username = '$username', password = '$password' WHERE id=$id";
    $result = mysqli_query($conn, $query_update);
    if(!$result){
        die("Error updating users" . mysqli_error($conn));
    } else{
        echo 'successfully updating users';
    }

}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Update Form</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="update_users.php" method="post">

                <input type="text" name="username" placeholder="Enter your username here" />
                <input type="password" name="password" placeholder="Your password here" />
                <select name="id" id="">
                    <?php
                    while( $row = mysqli_fetch_assoc($result) ){
                        $id = $row['id'];
                    echo "<option value='$id'>$id</option>";
                    }
                        ?>
                </select>


                <input type="submit" name="submit" value="Submit">

            </form>
        </div>
    </div>
</div>

</body>
</html>