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

//associative arrays, shorthand for $var = array();
$person = [
        "first" => "Joe",
        "last" => "Balingit",
        "address" => [
                "purok" => "Purok 6",
                "barangay" => "Rizal",
                "town" => "Buenavista",
        ],
        "age" => 31,

];
print_r($person["age"]); //outputting the address of the $person array;
//echo ( $person["first"] . ' lives in ' .  $person["address"]["purok"] . ' ' . $person["address"]["barangay"] . ' ' . $person["address"]["town"] );
echo "<br>";
//removing keys from the array elements
unset($person["address"]["purok"]);
print_r($person["address"]);



?>

</body>
</html>