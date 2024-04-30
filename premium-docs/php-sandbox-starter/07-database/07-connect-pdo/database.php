<?php

$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'alex';
$password = '123456';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}