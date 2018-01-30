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

//array_filter — Filters elements of an array using a callback function
/* Iterates over each value in the array passing them to the callback function. If the callback function returns true,
the current value from array is returned into the result array. Array keys are preserved. */
//takes the array as first argument and passed in the array into an anonymous function
// with temp variable ex. $list as temp holder of the array for evaluation
$numbers = [2, 4, 6, 8, 10];
$greater_than_four = array_filter( $numbers, function($lists){
    return $lists > 4;

});
var_dump($greater_than_four);

//or using a named function and passed the function name as 'callback'
$greater_than_equal_four = array_filter( $numbers, 'list_of_numbers');

function list_of_numbers( $data ){
    return $data >= 4;
}
var_dump($greater_than_equal_four);


//use case - filtering posts in wordpress

$post1 = new StdClass;
$post1->title = 'This is my Title';
$post1->ID = 1;
$post1->author = 'Joe Balingit';

$post2 = new StdClass;
$post2->title = 'This is my Title';
$post2->ID = 2;
$post2->author = 'Joe Balingit';


$post3 = new StdClass;
$post3->title = 'This is my Title';
$post1->ID = 3;
$post3->author = 'Eddie Apatan';

$posts = [$post1, $post2, $post3];

$filtered_posts = array_filter ( $posts, function($data){
    return $data->ID === 3;
} );
var_dump($filtered_posts);



?>

</body>
</html>