<?php
// Database Settings
$ip_address = "127.0.0.1";
$username = "user";
$password = "user";
$database = "weather_reports";

$pdodsn = "mysql:host={$ip_address}:3306;dbname={$database};charset=utf8mb4";
$pdoOptions = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false];

try {
    $pdo = new PDO($pdodsn, $username, $password, $pdoOptions);
} catch (PDOException $e) {
    throw new PDOException("Connection failed: " . $e->getMessage());
}

// Page Settings
$settings = array(
    "pageTitle" => "Weather Report",
);
$content = array(
    "title" => "Weather Report",
);