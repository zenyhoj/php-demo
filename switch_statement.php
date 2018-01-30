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
    $number = 1;
    switch ( $number ){
        case 1:
            echo "yes that's correct";
            break;
        case 2:
            echo "no that's wrong";
            break;
        default:
            echo "that's not a number";
            break;
    }
?>

</body>
</html>