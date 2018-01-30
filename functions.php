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
function init () {
	sayHi();

}

function sayHi(){
	echo "hello joe";
}
init();
echo "<br>";
//return values in functions
function add_all( $n1, $n2 ){
    return $n1 + $n2;
}
$result = add_all(200, 100); //this function contains the returned value of the function.
$new_result = add_all(300, $result); //add_all function first result could be use as parameter.
echo $result . "<br>";
echo $new_result;









echo "<br>";
//using closure in php
function greet($name){
	return function($greet_me) use ($name)  { // use ($name) use for closure.
		echo " {$greet_me} {$name}";

	};
}
$sayHi = greet('Joe');
$sayHi('How are you, ');

echo "<br>";
//or can be called as
echo $sayHi = greet('Joe')('Hello'); //shorthand

?>

</body>
</html>