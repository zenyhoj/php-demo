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
//using closure in php
function greet($name){
return function($greet_me) use ($name)  { // use ($name) use for closure.
echo " {$greet_me} {$name}";

};
}
$sayHi = greet('Joe');
$sayHi('How are you, ');
?>

</body>
</html>