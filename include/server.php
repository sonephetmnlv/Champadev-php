<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "champadev";

try{
    $conn = new PDO("mysql:host=$server; dbname=$database", $username, $password );
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connect Error:" .$e->getMessage();
}

date_default_timezone_set('asia/vientiane');

session_start();
