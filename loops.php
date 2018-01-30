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
//while loop
$new_array = [];
$counter = 0;
    while ( $counter <= 10 ) {
        array_push($new_array, $counter);

        $counter++;
    }
        print_r($new_array);
    echo "<br>";

        //itering through pushed arrays
        //Reference: http://php.net/manual/en/control-structures.foreach.php
        foreach ($new_array as &$value){
            $value = $value * $value;
            echo "<br>";
            print_r($value);
            unset($value); //must be unset to avoid conflict
}
echo "<br>";
foreach ($new_array as $key => $value){

            echo "<br>";
            print_r(" {$key} => {$value} "); //[] could also be used. [$key] => [$value]
}







?>

</body>
</html>