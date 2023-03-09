<?php
require_once __DIR__."/private/private_info.php";

$pdodsn = "mysql:host={$ip_address}:{$port};dbname={$database};charset=utf8mb4";
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