<?php

$serverName = "localhost";
$userName = "root";
$password ="";
$dbName = "task_manegement_db";

try{
    $conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
    echo "Connection faild :". $e->getMessage();
    exit();
}

?>