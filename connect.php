<?php
/* Connexion pdo */
$db_servername = "localhost";
$db_dbname = "movies-ecf";
$db_username = "eval";
$db_password = "TestPasswordForDb123))";

try {
    $db = new PDO("mysql:host=$db_servername;dbname=$db_dbname", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}