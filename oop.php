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

 /*Class User{
    private $first_name;
    private $last_name;
    private $age;
    private $address;

    public function get_full_name ( $first_name, $last_name ) {
        return 'hey ' . $first_name . ' ' .$last_name . ', ' . 'youve successfully created your first class';

    }

    public function user_details(){

    }
}


$joe = new User();
$eddie = new User();
echo $joe->get_full_name('joe', 'balingit') . "<br>";
echo $eddie->get_full_name('eddie', 'apatan');
*/
require_once('helpers.php');

 class User {
     private $username;
     private $preferred_email;
     private $secondary_email;
     private $user_id;
     private $status;

     //Constructs an instance of the class User
     public function __construct( $newUser, $Email_1, $Email_2 = null) {
        $this->username = $newUser;
        $this->preferred_email = $Email_1;
        $this->secondary_email = $Email_2;
        $this->user_id = GetNextUserId(); //referenced to helpers.php function GetNextUserId();
        $this->status = 1;
     }
    //this will be called after the execution of the objects;
     public function __destruct() {
	     // TODO: Implement __destruct() method.
         echo "$this->username object is being destroyed";
     }

	 public function GetUserName(){
        return $this->username;
     }

     public function GetPreferredEmail(){
         return $this->preferred_email;
     }

     public function GetSecondaryEmail(){
         return $this->secondary_email;
     }

     public function GetUserId(){
         return $this->user_id;
     }
     public function GetStatus(){
         return $this->status;
     }

     public function SetUserStatus ($input){
         if ($input > 1 || $input < 0){
             return false;
         }
         $this->status = $input;
         return true;
     }



 }



?>

</body>
</html>