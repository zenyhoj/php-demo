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

$user_credentials = array(
	"user1" => "pass1",
	"user2" => "pass2",
	"user3" => "pass3",
	"user4" => "pass4",
);

foreach($user_credentials as $keys => $values){
    if(count($values) !== 0 ) {
	    if ( $values === 'pass1' ) {
		    echo "welcome {$keys}";
	    }
    }
}




?>









</body>
</html>