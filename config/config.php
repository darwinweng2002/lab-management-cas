<?php
$servername = "u450897284_casdata";
$username = "u450897284_cas";
$password = "Cas1234567";

try {
    $conn = new PDO("mysql:host=$servername;dbname=lms19", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>