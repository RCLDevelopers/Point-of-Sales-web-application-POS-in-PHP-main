<?php

$servername = "localhost";
$username = "root";
$password = "";
$db="aluta_brand";
$charset="utf8mb4";
$SERVERHOST='http://localhost/';
global $conn;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db;charset=$charset", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>