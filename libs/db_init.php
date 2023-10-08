<?php

$dns = "mysql:host=localhost;dbname=yeticave321;charset=utf8mb4";

$oprions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_0900_ai_ci"
];

try {
    $con = new PDO($dns, "root", "", $oprions);
} catch (PDOException $e) {
    die($e->getMessage());
}

$cots = $con->query("SELECT * FROM categories")->fetchAll();
