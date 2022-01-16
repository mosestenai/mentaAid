<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php

session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array();
$minpassword = 7;
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "mentaaid";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    $error->getMessage();
}

?>