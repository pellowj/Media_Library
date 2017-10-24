<?php

$dsn = "MySQL:host=127.0.0.1;dbname=database;port=3306"; 
$username = "root"; 
$password = "root"; 

$db = new PDO($dsn, $username, $password); 
 
var_dump($db); 
?>