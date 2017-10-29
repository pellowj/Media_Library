<?php

try {
    $db = new PDO("mysql:host=198.71.225.53:3306;dbname=database;","kuhellopellow","hUod491#");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}   catch (Exception $e) {
    echo "Unable to connect to database";
    // echo $e-> getMessage();
    exit;
}


