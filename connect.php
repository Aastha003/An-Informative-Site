<?php

$user= 'root';
$pass= '';
$db= 'database';

$link= mysqli_connect('localhost', $user, $pass, $db) or die("unable to connect");
 
$db_select = mysqli_select_db($link, "database"); 

?>