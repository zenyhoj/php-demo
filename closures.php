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
/*function greet($name){
return function($greet_me) use ($name)  { // use ($name) use for closure.
echo " {$greet_me} {$name}";

};
}
$sayHi = greet('Joe');
$sayHi('How are you, ');
*/

$post1 = new StdClass;
$post1->title = 'This is my Title';
$post1->ID = 1;
$post1->author = 'Joe Balingit';

$post2 = new StdClass;
$post2->title = 'This is my Title';
$post2->ID = 2;
$post2->author = 'Joe Balingit';


$post3 = new StdClass;
$post3->title = 'The Seven Monsters';
$post3->ID = 3;
$post3->author = 'Eddie Apatan';

$posts = array (
        $post1, $post2, $post3,
        );

//best use case
//get posts by author
function get_posts_by_author( $posts, $author_name ) {
    return array_filter($posts, function($data) use ($author_name) {
        return $data->author === $author_name;
    });
}
var_dump(get_posts_by_author($posts, 'Joe Balingit'));


//get posts by ID
function get_posts_by_ID( $posts, $author_ID){
    return array_filter($posts, function($data) use ($author_ID) {
       return $data->ID === $author_ID;
    });

}
var_dump(get_posts_by_ID($posts, 3));

//get posts by title
function get_posts_by_title($posts, $post_title){ //$posts is an array of posts, $post_title is the title of the post that must be passed in, ex. 'The Seven Monsters'
    return array_filter($posts, function($data) use ($post_title){ //2 parameters, $posts array and the callback function
        return $data->title === $post_title; //title here is the actual post title property of the post.
    });
}
echo get_posts_by_title($posts, 'The Seven Monsters');

?>

</body>
</html>