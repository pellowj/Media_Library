<?php

try {
$db = new PDO("sqlite:".__DIR__."/database.db");
vardump($db);
} catch (Exception $e) {
    echo"Unable to connect to database";
    exit;
}

echo"Connection to the database";