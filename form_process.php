<?php

if(isset($_POST['submit'])){
	$users = array("joe", "eddie");
	$username = $_POST['username'];
	if(!empty($username) && in_array($username, $users)){
		echo "welcome " . " " .$username;
	} else {
		echo 'Please enter your username';
	}
}

