<?php
/*rundown of the process
-create the form, define the input fields, action='formprocess.php' method='post'
-check if data is submitted using the button click
-process the data
*/

if ( isset($_POST['submit']) ){ //check if the form is submitted
//    echo 'yes it works';
    if(isset($_POST['username']) && $_POST['password']) {
	    $username = $_POST['username'];
	    $password = $_POST['password'];
	    echo "<h3>Thank you for subscribing, {$username}! </h3>";
    }
    else{
        echo 'please provide some data';
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
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
<div class="member-access">
<form action="forms.php" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name='username' placeholder="username" required ><br>
    <label for="password">Password</label>
    <input type="password" id="password" name='password' placeholder="password" required ><br>
    <input type="Submit" name="submit">
</form>
</div>



<?php


?>
</body>
</html>