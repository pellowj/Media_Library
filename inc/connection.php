<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=database;port=3306","root","root");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}   catch (Exception $e) {
    echo "Unable to connect to database";
    echo $e-> getMessage();
    exit;
}

try {
    $results = $db->query("SELECT title, category FROM Media");
    echo "Retrieved Results";
} catch (Exception $e) {
    echo "Unable to retrieve results";
    exit;
}
