<?php

$sqlHost = 'localhost';
$sqlUser = 'root';
$sqlPass = 'mysql';

$conn = new mysqli($sqlHost, $sqlUser, $sqlPass, 'todolist');
$pdo = new PDO('mysql:host=localhost;dbname=todolist', $sqlUser, $sqlPass);
if($conn->connect_errno)
{
    pritnf("Connect failed: %s\n", $conn->conncet_error);
    exit();
}

?>