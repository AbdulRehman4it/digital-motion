<?php
// Enable error reporting for development (remove or comment out in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// // // Database credentials local
// $servername = getenv('DB_HOST') ?: 'localhost';
// $username = getenv('DB_USER') ?: 'root';
// $password = getenv('DB_PASS') ?: '';
// $dbname = getenv('DB_NAME') ?: 'blogadmin';

// Database credentials server
$servername = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: 'u927419660_Riss226721';
$password = getenv('DB_PASS') ?: 'Riss226721@@';
$dbname = getenv('DB_NAME') ?: 'u927419660_Riss226721';

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Connected successfully"; // Uncomment for debugging
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Example of using prepared statements
// $stmt = $conn->prepare("SELECT * FROM users WHERE id = :id");
// $stmt->execute(['id' => $userId]);
// $result = $stmt->fetchAll();
?>
