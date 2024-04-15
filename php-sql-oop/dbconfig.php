<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'ug224_backend');
define('DB_USER', 'ug224');
define('DB_PASS', 'ug224');

try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    die("Could not connect to the database " . DB_NAME . ": " . $e -> getMessage());
}