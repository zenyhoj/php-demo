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

//$config['db'] = array (
//    'host' => 'localhost',
//    'username' => 'root',
//    'password' => '',
//    'dbname' => 'contacts'
//);
//
////setting up the connection
////$db =new PDO('mysql:host = x; dbname = x');
//$db = new PDO('mysql:host=' . $config['db']['host'] . '; dbname = ' . $config['db']['dbname'], $config['db']['username'], $config['db']['password']);
//$query = $db->query("SELECT firstName from contacts");
//
//print_r($query);

$host = '127.0.0.1';
$db   = 'contacts';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);
$count = $pdo->query("SELECT count(*) FROM contacts")->fetchColumn();
echo $count;

$data = $pdo->query('SELECT firstName FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
print_r($data);

//two columns only for this mode
echo "<br>";
$data = $pdo->query('SELECT empId, firstName FROM contacts')->fetchAll(PDO::FETCH_KEY_PAIR);
var_export($data);

echo "<br>";
$data = $pdo->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_UNIQUE);
var_export($data);


?>

</body>
</html>