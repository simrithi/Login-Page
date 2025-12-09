<?php
// Load .env file
$env_file = __DIR__ . '/.env';

if (file_exists($env_file)) {
    $env = parse_ini_file($env_file);
} else {
    die("Error: .env file not found at " . $env_file);
}

$servername = $env['DB_SERVERNAME'] ?? 'localhost';
$username = $env['DB_USERNAME'] ?? 'root';
$password = $env['DB_PASSWORD'] ?? 'mysql@1108';
$database = $env['DB_NAME'] ?? 'users_db';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>