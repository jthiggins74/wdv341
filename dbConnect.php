<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wed341";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected succssfull";
} catch (PDOException $e) {
    echo "Connection failed: " .$e->getMessage();
    }

















?>